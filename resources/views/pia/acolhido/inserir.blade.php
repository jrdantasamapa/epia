  <div class="col-md-12">
    <div class="panel panel-primary">
            <div class="panel-heading"> <!-- panel-heading -->
            <div class="panel-title">
            <div id="image-holder" class="col-md-2">
            <img width="100" height="100" class="thumb-image" src="/css/images/semfoto.png" id="fileUpload" align="left">
            </div>
            <h1 align="center">CADASTRANDO ACOLHIDO</h1>
             </div>
            </div>

        <div class="panel-body">
               
                  {!! Form::open(['url'=>'inseriracolhido', 'method'=>'Post', 'files'=>true]) !!}
                 <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-1 control-label">Foto:</label>
                        <div class="col-md-7">  
                            {!! Form::file('foto', array('id'=>'foto')) !!}
                        </div> 
                        
                    </div>
                </div>
                <div class="form-group">
                     <div class="col-md-3">
                        <label class="col-md-3 control-label">Autos:</label>
                        {!! Form::text('autos', '', array('class'=>'form-control', 'placeholder'=>'Auto de Recebimento')) !!}
                    </div>
                    <div class="col-md-3">
                        <label class="col-md-12 control-label">Nº GA:</label>
                        {!! Form::text('ga', '', array('class'=>'form-control', 'placeholder'=>'Nº da  Guia de Acolhimento')) !!}
                    </div>
                    <div class="col-md-3">
                    <label class="col-md-12 control-label">Data Acolhimento:</label>
                        {!! Form::text('dt_acolhimento', '', array('class'=>'form-control', 'id' => 'datepicker','placeholder'=>'Data Acolhimento')) !!}
                    </div>
                     <div class="col-md-3">
                    <label class="col-md-12 control-label">Data de Nascimento:</label>
                        {!! Form::text('dt_nascimento', '', array('class'=>'form-control','id' => 'datepicker2', 'placeholder'=>'Data de nascimento')) !!}
                    </div>
                  </div>

                <div class="form-group">
                    <div class="col-md-7">
                    <label class="col-md-8 control-label">Nome:</label>
                        {!! Form::text('nome', '', array('class'=>'form-control', 'placeholder'=>'Nome completo do Acolhido')) !!}
                    </div>
                    <div class="col-md-2">
                        <label class="col-md-12 control-label">Sexo:</label>
                        {!! Form::select('sexo', array('M'=>'Masculino', 'F'=>'Feminino'), array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-3">
                        <label class="col-md-3 control-label">Naturalidade:</label>
                            {!! Form::text('naturalidade', '', array('class'=>'form-control', 'placeholder'=>'Naturalidade do Acolhido')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label class="col-md-3 control-label">Nacionalidade:</label>
                            {!! Form::text('nacionalidade', '', array('class'=>'form-control', 'placeholder'=>'Nacionalidade do Acolhido')) !!}
                    </div>
                    <div class="col-md-9">
                        <label class="col-md-6 control-label">Ultimo endereço:</label>
                        {!! Form::text('ult_end', '', array('class'=>'form-control', 'placeholder'=>'Ultimo endereço do acolhido')) !!}
                    </div>
                </div>
                <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                    <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-3 control-label">Nome Mãe:</label>
                            {!! Form::text('materno', '', array('class'=>'form-control', 'placeholder'=>'Nome Completo da Mãe')) !!}
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label">Endereço Mãe:</label>
                        {!! Form::text('end_mae', '', array('class'=>'form-control', 'placeholder'=>'Endereço da Materno')) !!}
                    </div>
                    <div class="col-md-4">
                        <label class="col-md-4 control-label">Telefone:</label>
                        {!! Form::text('mae_fone', '', array('class'=>'form-control','id'=>'Celular', 'placeholder'=>'Telefone Mãe')) !!}
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-3 control-label">Nome Pai:</label>
                            {!! Form::text('fraterno', '', array('class'=>'form-control', 'placeholder'=>'Nome Completo do Pai')) !!}
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label">Endereço Pai:</label>
                        {!! Form::text('end_pai', '', array('class'=>'form-control', 'placeholder'=>'Endereço da Fraterno')) !!}
                    </div>
                     <div class="col-md-4">
                        <label class="col-md-4 control-label">Telefone:</label>
                        {!! Form::text('pai_fone', '', array('class'=>'form-control','id'=>'Telefone', 'placeholder'=>'Telefone Pai')) !!}
                        {!! Form::hidden('status', '1' ) !!}
                        {!! Form::hidden('pia_status', '0' ) !!}
                    </div>
                    </div>
                    <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                <div class="form-group">
                    <div class="col-md-12" align="center">
                        {!! Form::submit('Cadastrar', array('class' =>'btn btn-success')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
   
</div>

