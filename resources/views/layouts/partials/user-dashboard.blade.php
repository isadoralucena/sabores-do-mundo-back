<section class="inner-page">
    <div class="container">
      @foreach ($recipes as $recipe)
        <div class="row" style="margin-bottom: 10px">
            <div class="col-lg-4 col-md-6">
                <div id="recipe-dashboard" class="d-flex align-items-center">
                    <div id="pic-dashboard">
                        @if($recipe->photo_path)
                            <img src="{{ asset('storage/' . $recipe->photo_path) }}" class="img-fluid" id="pic-d" alt="Imagem da Receita">
                        @else
                            <img src="assets/img/generic.jpg" class="img-fluid" id="pic-d">
                        @endif
                    </div>
                    <a href="{{route('show', $recipe->id)}}" class="text-decoration-none">
                        <div id="recipe-info-dashboard" class="col-lg-6" style="color: #444444">
                            <h4 style="display: inline-block">{{$recipe->title}}</h4>
                            <a href="{{route('editRecipe', ['id'=> $recipe->id])}}">
                                <button style="margin: 20px" class="btn btn-outline-secondary float-end" data-toggle="tooltip" data-placement="top" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </button>
                            </a>
                            <span style="display: block">{{$recipe->user->name}}</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
      @endforeach
      @if ($recipes->hasPages())
      <nav class="pagination-container">
          <ul class="pagination">

              {{-- Previous Page Link --}}
              @if ($recipes->onFirstPage())
                  <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                      <span aria-hidden="true">&lsaquo;</span>
                  </li>
              @else
                  <li class="pagination-item">
                      <a href="{{ $recipes->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                  </li>
              @endif

              {{-- Current Page and Available Pages --}}
              @for ($i = max(1, $recipes->currentPage() - 2); $i <= min($recipes->lastPage(), $recipes->currentPage() + 2); $i++)
                  @if ($i == $recipes->currentPage())
                      <li class="pagination-item active" aria-current="page"><span>{{ $i }}</span></li>
                  @else
                      <li class="pagination-item"><a href="{{ $recipes->url($i) }}">{{ $i }}</a></li>
                  @endif
              @endfor

              {{-- Next Page Link --}}
              @if ($recipes->hasMorePages())
                  <li class="pagination-item">
                      <a href="{{ $recipes->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                  </li>
              @else
                  <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                      <span aria-hidden="true">&rsaquo;</span>
                  </li>
              @endif

          </ul>
      </nav>
      @endif

    </div>
</section>