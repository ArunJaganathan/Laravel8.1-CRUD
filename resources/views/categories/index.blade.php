@extends('layouts.app')

@section('content')


    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                   @lang('models/categories.plural')
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-right"
                       href="{{ route('categories.create') }}">
                         @lang('crud.add_new')
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="card-body p-0">
                @include('categories.table')
                <div class="cf nestable-lists">

                   

                    <div class="dd" id="nestable">
                        <ol class="dd-list">
                            <?php //echo '<pre>';print_r($categories);?>
                            @foreach($categories as $category)
                            <li class="dd-item" data-id="wwww{{ $category->id }}" >
                                <div class="dd-handle cat" onclick="getDrag('{{ $category->id }}')">{{ $category->name }}</div>
                                <ol class="dd-list">
                                    @include('categories.tree',['subcategories' => $category->subcategory,'cat'=>$category->name])
                                    
                                </ol>
                            </li>
                            @endforeach
                           
                        </ol>
                    </div>

                    <textarea id="nestable-output" style="display: none;"></textarea>
                    <textarea id="nestable2-output" style="display: none;"></textarea>
                </div>

                <div class="card-footer clearfix float-right">
                    <div class="float-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>



<script>

$(document).ready(function()
{

    var updateOutput = function(e)
    {

        var list   = e.length ? e : $(e.target),
            output = list.data('output');
            console.log(output)
        if (window.JSON) {
            output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
        } else {
            output.val('JSON browser support required for this demo.');
        }
    };

    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1
    })
    .on('change', updateOutput);

   

    // output initial serialised data
   
    updateOutput($('#nestable').data('output', $('#nestable2-output')));

    $('#nestable').on('click', function(e)
    {
        console.log(e)
        var target = $(e.target),

            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });

    $('#nestable3').nestable();
    
});

function getDrag(id)
{
    alert(id)
}

</script>


@endsection