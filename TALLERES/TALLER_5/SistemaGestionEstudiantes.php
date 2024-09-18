<?php

require 'Estudiante.php';

class SistemaGestionEstudiantes {
    private array $estudiantes;
    private array $graduados;

    public function __construct() {
        $this->estudiantes = [];
        $this->graduados = [];
    }

    public function agregarEstudiante(Estudiante $estudiante): void {
        $this->estudiantes[$estudiante->obtenerDetalles()['id']] = $estudiante;
    }

    public function obtenerEstudiante(int $id): ?Estudiante {
        return $this->estudiantes[$id] ?? null;
    }

    public function listarEstudiantes(): array {
        return $this->estudiantes;
    }

    public function calcularPromedioGeneral(): float {
        if (count($this->estudiantes) === 0) return 0;
        $total = array_reduce($this->estudiantes, function($carry, $estudiante) {
            return $carry + $estudiante->obtenerPromedio();
        }, 0);
        return $total / count($this->estudiantes);
    }

    public function obtenerEstudiantesPorCarrera(string $carrera): array {
        return array_filter($this->estudiantes, function($estudiante) use ($carrera) {
            return strtolower($estudiante->obtenerDetalles()['carrera']) === strtolower($carrera);
        });
    }

    public function obtenerMejorEstudiante(): ?Estudiante {
        return array_reduce($this->estudiantes, function($best, $current) {
            return $best === null || $current->obtenerPromedio() > $best->obtenerPromedio() ? $current : $best;
        });
    }

    public function generarReporteRendimiento(): array {
        $materias = [];
        foreach ($this->estudiantes as $estudiante) {
            foreach ($estudiante->obtenerDetalles()['materias'] as $materia => $calificacion) {
                if (!isset($materias[$materia])) {
                    $materias[$materia] = [
                        'total_calificaciones' => 0,
                        'num_calificaciones' => 0,
                        'calificaciones' => []
                    ];
                }
                $materias[$materia]['total_calificaciones'] += $calificacion;
                $materias[$materia]['num_calificaciones']++;
                $materias[$materia]['calificaciones'][] = $calificacion;
            }
        }
        $reporte = [];
        foreach ($materias as $materia => $data) {
            $promedio = $data['total_calificaciones'] / $data['num_calificaciones'];
            $reporte[$materia] = [
                'promedio' => $promedio,
                'mas_alta' => max($data['calificaciones']),
                'mas_baja' => min($data['calificaciones'])
            ];
        }
        return $reporte;
    }

    public function graduarEstudiante(int $id): void {
        if (isset($this->estudiantes[$id])) {
            $this->graduados[$id] = $this->estudiantes[$id];
            unset($this->estudiantes[$id]);
        }
    }

    public function generarRanking(): array {
        usort($this->estudiantes, function($a, $b) {
            return $b->obtenerPromedio() <=> $a->obtenerPromedio();
        });
        return $this->estudiantes;
    }

    public function buscarEstudiantes(string $termino): array {
        return array_filter($this->estudiantes, function($estudiante) use ($termino) {
            return stripos($estudiante->obtenerDetalles()['nombre'], $termino) !== false ||
                   stripos($estudiante->obtenerDetalles()['carrera'], $termino) !== false;
        });
    }

    public function estadisticasPorCarrera(): array {
        $estadisticas = [];
        foreach ($this->estudiantes as $estudiante) {
            $carrera = $estudiante->obtenerDetalles()['carrera'];
            if (!isset($estadisticas[$carrera])) {
                $estadisticas[$carrera] = [
                    'cantidad' => 0,
                    'total_promedio' => 0,
                    'mejor_estudiante' => null
                ];
            }
            $estadisticas[$carrera]['cantidad']++;
            $estadisticas[$carrera]['total_promedio'] += $estudiante->obtenerPromedio();
            if ($estadisticas[$carrera]['mejor_estudiante'] === null ||
                $estudiante->obtenerPromedio() > $estadisticas[$carrera]['mejor_estudiante']->obtenerPromedio()) {
                $estadisticas[$carrera]['mejor_estudiante'] = $estudiante;
            }
        }
        foreach ($estadisticas as $carrera => &$info) {
            $info['promedio'] = $info['cantidad'] > 0 ? $info['total_promedio'] / $info['cantidad'] : 0;
            $info['mejor_estudiante'] = $info['mejor_estudiante'] ? (string)$info['mejor_estudiante'] : null;
        }
        return $estadisticas;
    }
}

?>
