<!-- IMPORTAR LA PLANTILLA -->
<?= $this->extend('plantillas/panel_base') ?>

<!-- RENDER css -->
<?= $this->section('css') ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_ADMIN_PLUGINS) . '/datatables-bs4/css/dataTables.bootstrap4.min.css' ?>">
<link rel="stylesheet" href="<?= base_url(RECURSOS_PANEL_ADMIN_PLUGINS) . '/datatables-responsive/css/responsive.bootstrap4.min.css' ?>">
<!-- Custom CSS -->
<style>
    .card {
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        border: none;
    }

    .card-header {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
        border-radius: 8px 8px 0 0 !important;
        padding: 20px;
    }

    .card-title {
        font-weight: 600;
        margin-bottom: 10px;
        font-size: 1.5rem;
    }

    .btn-agregar {
        background-color: #38b2ac;
        border-color: #38b2ac;
        border-radius: 20px;
        padding: 8px 20px;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-agregar:hover {
        background-color: #319795;
        border-color: #319795;
        transform: translateY(-2px);
    }

    .action-btn {
        border-radius: 4px;
        margin-right: 5px;
        transition: all 0.2s;
    }

    .action-btn:hover {
        transform: translateY(-2px);
    }

    .btn-deshabilitar {
        background-color: #4a5568;
        border-color: #4a5568;
    }

    .btn-habilitar {
        background-color: #4299e1;
        border-color: #4299e1;
    }

    .btn-detalles {
        background-color: #ecc94b;
        border-color: #ecc94b;
    }

    .btn-eliminar {
        background-color: #f56565;
        border-color: #f56565;
    }

    table.dataTable {
        border-collapse: collapse !important;
    }

    table.dataTable thead th {
        background-color: #f7fafc;
        border-bottom: 2px solid #e2e8f0;
        font-weight: 600;
        color: #4a5568;
    }

    table.dataTable tbody tr:hover {
        background-color: #f7fafc;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current {
        background: #667eea !important;
        color: white !important;
        border: none !important;
        border-radius: 4px;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: #764ba2 !important;
        color: white !important;
        border: none !important;
    }

    .dataTables_wrapper .dataTables_filter input {
        border-radius: 20px;
        border: 1px solid #e2e8f0;
        padding: 5px 10px;
    }
</style>
<?= $this->endSection() ?>
<!-- RENDER css -->

<!-- RENDER CONTENT -->
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>
<!-- RENDER CONTENT -->

<!-- RENDER js -->
<?= $this->section('js') ?>
<!-- DataTables  & Plugins -->
<script src="<?= base_url(RECURSOS_PANEL_ADMIN_PLUGINS) . '/datatables/jquery.dataTables.min.js' ?>"></script>
<script src="<?= base_url(RECURSOS_PANEL_ADMIN_PLUGINS) . '/datatables-bs4/js/dataTables.bootstrap4.min.js' ?>"></script>
<script src="<?= base_url(RECURSOS_PANEL_ADMIN_PLUGINS) . '/datatables-responsive/js/dataTables.responsive.min.js' ?>"></script>
<script src="<?= base_url(RECURSOS_PANEL_ADMIN_PLUGINS) . '/datatables-responsive/js/responsive.bootstrap4.min.js' ?>"></script>
<script src="<?= base_url(RECURSOS_PANEL_ADMIN_PLUGINS) . '/datatables-buttons/js/dataTables.buttons.min.js' ?>"></script>

<script>
    $(document).ready(function() {
            $('#dataTable').DataTable({
                'processing': true,
                "responsive": true,
                "scrollX": false,
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "processing": "<i class='fas fa-spinner fa-spin'></i> Procesando...",
                    "search": "<i class='fas fa-search'></i> Buscar:",
                    "zeroRecords": "No se encontraron registros coincidentes",
                    "paginate": {
                        "first": "<i class='fas fa-angle-double-left'></i>",
                        "last": "<i class='fas fa-angle-double-right'></i>",
                        "next": "<i class='fas fa-angle-right'></i>",
                        "previous": "<i class='fas fa-angle-left'></i>",
                    }, //end paginate
                } //end language
            }) //end DataTable

        } //end function
    ); //end ready
</script>
<?= $this->endSection() ?>
<!-- RENDER js -->