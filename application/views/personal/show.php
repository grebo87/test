<div class="row">
    <div class="col-md-12">
        <a href="<?php  echo base_url();?>personal" class="btn btn-default"><i class="fa fa-arrow-circle-left"></i> Regresar</a>
    </div>
</div>

    <br>
<h2>Información del Personal</h2>


<div class="invoice-block">
    <div class="row">
        <div class="col-md-2">
            @if(count($personal->fotos) > 0)
                @foreach($personal->fotos as $foto)
                    <div class="user-img img-thumbnail">
                        <img src="{{ asset('fotos/'.$foto->file) }}" alt="Personal Avatar" width="130" height="150">
                    </div>
                @endforeach
            @else
                @if($personal->sexo === 'Masculino')
                    <div class="user-img img-thumbnail"><img src="{{asset('images/user-male.png')}}" alt="Personal Avatar" width="130" height="150"></div>
                @else
                    <div class="user-img img-thumbnail"><img src="{{asset('images/user-female.png')}}" alt="Personal Avatar" width="130" height="150"></div>
                @endif
            @endif

            <h3><?php echo $personal->nombre;?> <?php echo $personal->apellido_paterno;?></h3>

        </div>

        <div class="col-md-10">
            <div class="profile-header">
                Datos Generales
            </div>
 			<?php include 'partials/datos-generales.php'; ?>

            <div class="profile-header">
                Documentación
            </div>
            @include('personal.partials.documentacion')

            <div class="profile-header">
                Domicilio
            </div>
            @include('personal.partials.domicilio')

            <div class="profile-header">
                Datos Bancarios
            </div>
            @include('personal.partials.datos-bancarios')

            <div class="profile-header">
                Datos de Beneficiarios
            </div>
            @include('personal.partials.datos-beneficiarios')
        </div>
    </div>
</div>