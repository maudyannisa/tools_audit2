<div id="search">
  {!! Form::open(['method' => 'GET', 'action' => 'PerusahaanController@search']) !!}
      <div class="input-group">
          {!! Form::text('keyword', (!empty($keyword)) ? $keyword : null, ['class' => 'form-control', 'placeholder' => 'Company Name'],'') !!}
          <span class="input-group-btn">
              {!! Form::button('Search', ['type'=>'submit', 'class'=>'btn btn-black']) !!}
          </span>
      </div>
  {!! Form::close() !!}
</div>
