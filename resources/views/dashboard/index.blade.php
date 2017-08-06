@extends('layouts.admin.layout')

@section('content')
    <div class="row">
        <div class="dashboard__tools">
            <div class="left__content">
                <h5 class="content__title">Dashboard</h5>
                <p class="content__desc">Bienvenido, {{ Auth::user()->name }}</p>
            </div>
            {{-- <div class="right__content">
                <a class="btn btn--primary btn--outline btn--sm btn--round mr--2" type="button">Edit</a>
                <a class="btn btn--primary btn--outline btn--sm btn--round" type="button">Update Dashboard</a>
            </div> --}}
        </div>
    </div>
    <div class="row">
        <div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-3 mt--3">
            <div class="card stats__widget card--primary">
                <div class="card__body">
                    <div class="content__body">
                        <div class="content__left">
                            <h5 class="left__title">{{ $countClients }}</h5>
                            <p class="left__desc">Clientes</p>
                        </div>
                        <div class="content__right"><i class="fa fa-users icon--stats"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-3 mt--3">
            <div class="card stats__widget">
                <div class="card__body">
                    <div class="content__body">
                        <div class="content__left">
                            <h5 class="left__title">{{ $countTransports }}</h5>
                            <p class="left__desc">Transportes</p>
                        </div>
                        <div class="content__right"><i class="fa fa-truck icon--stats"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-3 mt--3">
            <div class="card stats__widget">
                <div class="card__body">
                    <div class="content__body">
                        <div class="content__left">
                            <h5 class="left__title">{{ $countDrivers }}</h5>
                            <p class="left__desc">Choferes</p>
                        </div>
                        <div class="content__right"><i class="fa fa-id-card icon--stats"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-3 mt--3">
            <div class="card stats__widget">
                <div class="card__body">
                    <div class="content__body">
                        <div class="content__left">
                            <h5 class="left__title">{{ $countdeliveryReports }}</h5>
                            <p class="left__desc">Entregas</p>
                        </div>
                        <div class="content__right"><i class="fa fa-paper-plane-o  icon--stats"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Table last delivery-->
        <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <div class="card">
                <div class="card__heading">
                    <h6 class="card__title">Últimas Entregas</h6>
                </div>
                <div class="card__body">
                    <table class="table table--responsive thead--default undefined">
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
                                    <td class="text-center"><a href="/entregas/{{ $lastDeliveryReport->id }}" class="badge badge-success">Ver entrega</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card__footer">
                    <a href="/entregas" class="badge badge--info">Todas las entregas</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Table last clients -->
        <div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
            <div class="card">
                <div class="card__heading">
                    <h6 class="card__title">Últimos Clientes</h6>
                </div>
                <div class="card__body">
                    <table class="table table--responsive thead--default undefined">
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
                <div class="card__footer">
                    <a href="/clientes" class="badge badge--info">Todos los clientes</a>
                </div>
            </div>
        </div>

        <!-- Table last maintenances -->
        <div class="col-xs col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
            <div class="card">
                <div class="card__heading">
                    <h6 class="card__title">Últimos Mantenimientos</h6>
                </div>
                <div class="card__body">
                    <table class="table table--responsive thead--default undefined">
                        <thead>
                            <tr>
                                <th>Transporte</th>
                                {{-- <th>Tipo Mant.</th> --}}
                                <th>Próx. Rev.</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($lastMaintenances as $lastMaintenance)
                                <tr>
                                    <td>{{ $lastMaintenance->transport->name }} </td>
                                    {{-- <td>{{ $lastMaintenance->name }}</a></td> --}}
                                    <td>{{ $lastMaintenance->next_check }}</td>
                                    <td><a href="/mantenimiento/{{ $lastMaintenance->id }}" class="badge badge-success">Ver mantenimiento</a> </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card__footer">
                    <a href="/mantenimientos" class="badge badge--info">Todos los mantenimientos</a>
                </div>
            </div>
        </div>
    </div>
@endsection
