<!-- IMPORTAR LA PLANTILLA -->
<?= $this->extend('plantillas/panel_base') ?>

<!-- RENDER css -->
<?= $this->section('css') ?>
<!-- daterangepicker -->
<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_ADMIN_PLUGINS . '/daterangepicker/daterangepicker.css') ?>">
<?= $this->endSection() ?>
<!-- RENDER css -->

<!-- RENDER CONTENT -->
<?= $this->section('content') ?>
<section class="content">
    <div class="container-fluid mt-4">
        <!-- Row de Cards -->
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Usuarios Activos</h5>
                        <p class="card-text">1,234</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-white bg-success mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Ventas Hoy</h5>
                        <p class="card-text">$5,670.00</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-white bg-warning mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Órdenes Pendientes</h5>
                        <p class="card-text">56</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-white bg-danger mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Errores del Sistema</h5>
                        <p class="card-text">3</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabla de datos -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Últimos Usuarios Registrados</h5>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Fecha de Registro</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Juan Pérez</td>
                            <td>juanp@example.com</td>
                            <td>2025-03-20</td>
                            <td><span class="badge badge-success">Activo</span></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>María López</td>
                            <td>mlopez@example.com</td>
                            <td>2025-03-19</td>
                            <td><span class="badge badge-warning">Pendiente</span></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Carlos Ruiz</td>
                            <td>cruiz@example.com</td>
                            <td>2025-03-18</td>
                            <td><span class="badge badge-danger">Inactivo</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Sección con texto y gráficas de ejemplo -->
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">Resumen de Actividades</div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, odio!</p>
                        <button class="btn btn-primary btn-sm">Ver más</button>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">Estadísticas Rápidas</div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">Usuarios en línea: <strong>143</strong></li>
                            <li class="list-group-item">Tickets abiertos: <strong>12</strong></li>
                            <li class="list-group-item">Visitas del día: <strong>3,567</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<!-- RENDER CONTENT -->

<!-- RENDER js -->
<?= $this->section('js') ?>
<!-- daterangepicker -->
<script src="<?= base_url(RECURSOS_PANEL_ADMIN_PLUGINS . '/moment/moment.min.js') ?>"></script>
<script src="<?= base_url(RECURSOS_PANEL_ADMIN_PLUGINS . '/daterangepicker/daterangepicker.js') ?>"></script>
<?= $this->endSection() ?>
<!-- RENDER js -->