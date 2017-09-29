<div id="container-principal">
   <div id="container-transports">
      <div class="row">
          <div class="col-xs col-sm-12 col-md-12 col-lg-12 col-xl-12">
              <div class="card">
                  <div class="card__heading">
                      <h6 class="card__title">Transportes</h6>
                  </div>
                  <div class="card__body">
                      @if (!$transports->isEmpty())
                          <table class="table table--responsive thead--default undefined">
                           <thead>
                              <tr>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Acciones</th>
                              </tr>
                           </thead>
                           <tbody>
                                @foreach ($transports as $transport)
                                  <tr>
                                    <td>{{ $transport->name }}</td>
                                    <td>{{ $transport->brand }}</td>
                                    <td>{{ $transport->model }}</td>
                                    <td>
                                        <a href="/transportes/{{ $transport->id }}/edit" class="badge badge-info">Editar</a>
                                        <a href="/transportes/{{ $transport->id }}/delete" class="badge badge-danger">Eliminar</a>
                                    </td>
                                  </tr>
                                  @endforeach
                           </tbody>
                          </table>

                          <div class="col-12">
                              <div class="mt--4">
                                  @if (count($transports))
                                      {{ $transports->links('pagination::bootstrap-4') }}
                                  @endif
                              </div>
                          </div>
                      @else
                          <div class="alert alert-warning">
                              Por el momento aún no hay registro de clientes.
                          </div>
                      @endif
                  </div>
              </div>
          </div>
      </div>
   </div>
</div>
