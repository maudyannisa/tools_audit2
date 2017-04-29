<div id="search">
  {!! Form::open(['method' => 'GET', 'action' => ['AuditeeController@search', $id_perusahaan]]) !!}
      <div class="input-group">
          {!! Form::text('keyword', (!empty($keyword)) ? $keyword : null, ['class' => 'form-control', 'placeholder' => 'System Name'],'') !!}
          <span class="input-group-btn">
              {!! Form::button('Search', ['type'=>'submit', 'class'=>'btn btn-black']) !!}
          </span>
      </div>
  {!! Form::close() !!}
</div>
