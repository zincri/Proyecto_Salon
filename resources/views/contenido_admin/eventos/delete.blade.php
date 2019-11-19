<div class="message-box message-box-success animated fadeIn" id="message-box-success-{{$item->id}}">
    {{Form::Open(array('action'=>array('Admin\EventosController@destroy',$item->id),'method'=>'delete'))}}
                <div class="mb-container">
                    <div class="mb-middle">
                        <div class="mb-title"><span class="fa fa-check"></span> Abonar</div>
                        <div class="mb-content">
                            <p>¿Esta seguro que desea abonar este evento?</p>
                        </div>
                        <div class="mb-footer">
                            
                        <button class="btn btn-primary btn-lg pull-right" type="submit">Abonar</button>
                            &nbsp; 
                        <button class="btn btn-default btn-lg pull-right" type="button" data-dismiss="modal">Cancelar</button>
                        </div>
                    </div>
                </div>
    {{Form::Close()}}
</div>