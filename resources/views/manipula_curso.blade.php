@extends('padrao')
@section('content')

<section>
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title d-flex align-items-center flex-wrap">
            <h2 class="mr-40">Gerenciamento do Curso</h2>
          </div>
        </div>
        <!-- Invoice Wrapper Start -->
        <div class="invoice-wrapper align-items-center m-5">
          <div class="row align-items-center">
            <div class="col-10 ">
              <div class="invoice-card card-style mb-30">
                <div class="card-style mb-30 ">
                  <h6 class="mb-25 fs-4">Digite o nome do curso</h6>

                  <section class="container m-5">

                    <div class="container m-5">
                      <form method="get" action="{{route('busca-curso-nome')}}">
                        <div class="row">

                          <div class="col-6">
                            <input type="text" id="curso" name="curso" class="form-control" placeholder="Digite o Curso" aria-label="First name">
                          </div>

                          <div class="col-6">
                            <button type="submit" class="main-btn primary-btn btn-hover btn-sm">Buscar</button>
                          </div>

                        </div>
                      </form>

                    </div>


                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">Código</th>
                          <th scope="col">Curso</th>
                          <th scope="col">Editar</th>
                          <th scope="col">Excluir</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($registrosCurso as $registrosCursos)
                        <tr>
                          <th scope="row">{{$registrosCursos->id}}</th>
                          <td>{{$registrosCursos->nomecurso}}</td>
                          <td>
                            <a href="{{route('alterar-curso',$registrosCursos->id)}}">
                              <button type="button" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg>
                              </button>
                            </a>
                          </td>

                          <td>
                            <form method="Post" Action="{{route('deletar-curso',$registrosCursos->id)}}">
                              @method('delete')
                              @csrf

                              <button
                                type="button"
                                class="btn btn-danger"
                                data-bs-toggle="modal"
                                data-bs-target="#confirmModal_{{$registrosCursos->id}}"
                              >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>

                              </button>

                              <div class="modal fade"  id="confirmModal_{{$registrosCursos->id}}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5">Alerta</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                                    </div>
                                    <div class="modal-body">Você tem certeza de que quer deletar esse curso?</div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary">Sim</button>
                                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </section>

                </div>

              </div>
              <!-- Invoice Wrapper End -->
            </div>
            <!-- end container -->
          </div>
          <!-- end container -->
        </div>
        <!-- end container -->
      </div>
      <!-- end container -->
    </div>
    <!-- end container -->
  </div>
  <!-- end container -->
</section>
@endsection