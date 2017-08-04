@extends('layouts.admin.layout')

@section('content')
    <h1 class="page-header">Dashboard</h1>
    <div class="row indicators-dashboard">
        <div class="col-md-3">
            <div class="card card-inverse card-primary mb-3">
                <div class="card-block">
                    <div class="card-count">{{ $countClients }}</div>
                    <div><small>Clientes</small></div>
                </div>
                <div class="icon-card">
                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-inverse card-success mb-3">
                <div class="card-block">
                    <div class="card-count">{{ $countTransports }}</div>
                    <div><small>Transportes</small></div>
                </div>
                <div class="icon-card">
                    <i class="fa fa-truck" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-inverse card-warning mb-3">
                <div class="card-block">
                    <div class="card-count">{{ $countDrivers }}</div>
                    <div><small>Choferes</small></div>
                </div>
                <div class="icon-card">
                    <i class="fa fa-id-card" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-inverse card-danger mb-3">
                <div class="card-block">
                    <div class="card-count">{{ $countdeliveryReports }}</div>
                    <div><small>Entregas</small></div>
                </div>
                <div class="icon-card">
                    <i class="fa fa-paper-plane-o " aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-table-dashboard">
                <h4 class="card-header">Últimas Entregas</h4>
                <div class="card-block">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Cliente</th>
                                <th>Fecha de Salida</th>
                                <th>Fecha de llegada</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lastDeliveryReports as $lastDeliveryReport)
                                <tr>
                                    <td>{{ $lastDeliveryReport->id }} </td>
                                    <td>{{ $lastDeliveryReport->client->name }}</a></td>
                                    <td>{{ $lastDeliveryReport->departure_date }}</td>
                                    <td>{{ $lastDeliveryReport->delivery_date }}</td>
                                    <td class="text-center"><a href="/entregas/{{ $lastDeliveryReport->id }}" class="badge badge-success">Ver Entrega</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="/entregas" class="badge badge-primary">Ver todas las entregas</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card card-table-dashboard">
                <h4 class="card-header">Últimos Clientes</h4>
                <div class="card-block">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lastClients as $lastClient)
                                <tr>
                                    <td>{{ $lastClient->name }} </td>
                                    <td><a href="mailto:{{ $lastClient->email }}">{{ $lastClient->email }}</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="/clientes" class="badge badge-primary">Ver todos los clientes</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-table-dashboard">
                <h4 class="card-header">Últimos Mantenimientos</h4>
                <div class="card-block">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>Transporte</th>
                                <th>Tipo Mant.</th>
                                <th>Próx. Rev.</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lastMaintenances as $lastMaintenance)
                                <tr>
                                    <td>{{ $lastMaintenance->transport->name }} </td>
                                    <td>{{ $lastMaintenance->name }}</a></td>
                                    <td>{{ $lastMaintenance->next_check }}</td>
                                    <td><a href="/mantenimiento/{{ $lastMaintenance->id }}" class="badge badge-success">Ver mantenimiento</a> </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="/mantenimientos" class="badge badge-primary">Ver todos los mantenimientos</a>
                </div>
            </div>
        </div>
    </div>
@endsection
