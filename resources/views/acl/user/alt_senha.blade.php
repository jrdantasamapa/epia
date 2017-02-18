<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-success">
               <div class="panel-heading">Resetar Senha</div>
                <div class="panel-body">
                {!! Form::open(['url'=> 'updatesenha', 'method'=>'post']) !!}
                        {!! Form::hidden('id', $usuarios->id)!!}
                   <div class="form-group col-md-12"> 
                        <label class="col-md-4 control-label">Senha Atual</label>
                        {!! Form::password('senhaatual','',array('class'=>'form-control col-md-8')) !!}
                   </div>
                   <div class="form-group col-md-12"> 
                        <label class="col-md-4 control-label">Nova Senha</label>
                        {!! Form::password('password','',array('class'=>'form-control col-md-8')) !!}
                   </div>
                   <div class="form-group col-md-12"> 
                        <label class="col-md-4 control-label">Confirmação</label>
                        {!! Form::password('confirma','',array('class'=>'form-control col-md-8')) !!}
                   </div>
                   <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-success">
                                <i class="fa fa-btn fa-refresh"></i> Resetar Senha
                            </button>
                        </div>
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
