  <div class="col-md-12">
    <div class="panel panel-primary">

    <div class="panel-heading">
    <div class="panel-title">
    @foreach($acolhidos as $acolhido)
        <div id="image-holder" class="col-md-2">
        <img width="75" height="100" class="thumb-image" src="{!! $acolhido->foto !!}" id="fileUpload" align="left">
        </div>
        <h1 align="center">EDITANDO CADASTRO DO ACOLHIDO</h1>
        <h4 align="center">&nbsp NOME: {{$acolhido->nome}}</h4>
    </div>
    </div>



        <div class="panel-body">
        
                            
                {!! Form::open(['url'=>'updateacolhido$acolhido->id', 'method'=>'Post', 'files'=>true]) !!}
                 <div class="form-group">
                    <div class="col-md-12">
                    {!! Form::file('foto', array('id'=>'foto')) !!}
                    </div>
                </div>
                <div class="form-group">
                     <div class="col-md-3">
                        <label class="col-md-3 control-label">Autos:</label>
                        {!! Form::text('autos', $acolhido->autos, array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-3">
                        <label class="col-md-12 control-label">Nº GA:</label>
                        {!! Form::text('ga', $acolhido->ga, array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-3">
                    <label class="col-md-12 control-label">Data Acolhimento:</label>
                        {!! Form::text('dt_acolhimento', $acolhido->dt_acolhimento, array('class'=>'form-control', 'id' => 'datepicker')) !!}
                    </div>
                    <div class="col-md-3">
                    <label class="col-md-12 control-label">Data Desacolhimento:</label>
                        {!! Form::text('dt_desacolhimento', $acolhido->dt_desacolhimento, array('class'=>'form-control', 'id' => 'datepicker1')) !!}
                    </div>
                 </div>

                <div class="form-group">
                    <div class="col-md-7">
                    <label class="col-md-8 control-label">Nome:</label>
                        {!! Form::text('nome', $acolhido->nome, array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-2">
                        <label class="col-md-12 control-label">Sexo:</label>
                        {!! Form::select('sexo', array($acolhido->sexo=>'', 'M'=>'Masculino', 'F'=>'Feminino'), array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-3">
                    <label class="col-md-12 control-label">Data de Nascimento:</label>
                        {!! Form::text('dt_nascimento', $acolhido->dt_nascimento, array('class'=>'form-control','id' => 'datepicker2')) !!}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-3">
                        <label class="col-md-3 control-label">Naturalidade:</label>
                            {!! Form::text('naturalidade', $acolhido->naturalidade, array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-3">
                        <label class="col-md-3 control-label">Nacionalidade:</label>
                            {!! Form::text('nacionalidade', $acolhido->nacionalidade, array('class'=>'form-control')) !!}
                    </div>
                    <div class="col-md-6">
                        <label class="col-md-6 control-label">Ultimo endereço:</label>
                        {!! Form::text('ult_end', $acolhido->ult_end, array('class'=>'form-control')) !!}
                        {{ Form::hidden('id', $acolhido->id ) }}
                    </div>
                    </div>
                    <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                    <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-3 control-label">Nome Mãe:</label>
                            {!! Form::text('materno', $acolhido->materno, array('class'=>'form-control', 'placeholder'=>'Nome Completo da Mãe')) !!}
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label">Endereço Mãe:</label>
                        {!! Form::text('end_mae', $acolhido->end_mae, array('class'=>'form-control', 'placeholder'=>'Endereço da Materno')) !!}
                    </div>
                    <div class="col-md-4">
                        <label class="col-md-4 control-label">Telefone:</label>
                        {!! Form::text('mae_fone', $acolhido->mae_fone, array('class'=>'form-control', 'placeholder'=>'Telefone Mãe')) !!}
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-12">
                        <label class="col-md-3 control-label">Nome Pai:</label>
                            {!! Form::text('fraterno', $acolhido->fraterno, array('class'=>'form-control', 'placeholder'=>'Nome Completo do Pai')) !!}
                    </div>
                    </div>
                    <div class="form-group">
                    <div class="col-md-8">
                        <label class="col-md-4 control-label">Endereço Pai:</label>
                        {!! Form::text('end_pai', $acolhido->end_pai, array('class'=>'form-control', 'placeholder'=>'Endereço da Fraterno')) !!}
                    </div>
                     <div class="col-md-4">
                        <label class="col-md-4 control-label">Telefone:</label>
                        {!! Form::text('pai_fone', $acolhido->pai_fone, array('class'=>'form-control','id'=>'Telefone', 'placeholder'=>'Telefone Pai')) !!}
                    </div>
                    </div>
                    <div class="col-md-12"> <hr style="color: #228B22; background-color: #228B22; height: 2px;"></div>
                <div class="form-group">
                       <div class="col-md-12" align="center">
                        {!! Form::submit('Alterar', array('class' =>'btn btn-success')) !!}
                    </div>
                </div>
                @endforeach
                {!! Form::close() !!}
        </div>
    </div>
</div>