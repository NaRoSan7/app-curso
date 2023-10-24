@extends('padrao')
@section('content')

<section>
  <div class="container-fluid">
    <!-- ========== title-wrapper start ========== -->
    <div class="title-wrapper pt-30">
      <div class="row align-items-center">
        <div class="col-md-6">
          <div class="title d-flex align-items-center flex-wrap">
            <h2 class="mr-40">Cadastrar Curso</h2>
          </div>
        </div>
        <!-- Invoice Wrapper Start -->
        <div class="invoice-wrapper align-items-center m-5">
          <div class="row align-items-center">
            <div class="col-10 ">
              <div class="invoice-card card-style mb-30">
                <div class="card-style mb-30 ">
                  <h6 class="mb-25 fs-4" >Digite o nome do curso</h6>
                  <form method="post" action="{{route('cadastro-curso')}}">
                    @csrf
                    <div class="input-style-1 fs-4 ">
                    <label class="fs-4">Código da Categoria</label>
                    
                      <input type="text" name="idcategoria" placeholder="1245" />
                    
                  </div>
                  <div class="input-style-1 fs-4 ">
                    <label class="fs-4">Curso</label>
                    
                      <input type="text" name="nomecurso" placeholder="PHP - Laravel" />
                    
                  </div>

                  <div class="input-style-1 fs-4 ">
                    <label class="fs-4">Carga Horária</label>
                    
                      <input type="text" name="cargahoraria" placeholder="20 Horas" />
                    
                  </div>

                  

                  <div class="input-style-1 fs-4 ">
                    <label class="fs-4">Preço</label>
                    
                      <input type="text" name="valor" placeholder="R$ 256,23" />
                    
                  </div>
                  
                  <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Salvar</button>
                  
                  </div>
                  </form>
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