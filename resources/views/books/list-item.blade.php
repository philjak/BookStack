<a href="{{ $book->getUrl() }}" class="book entity-list-item" data-entity-type="book" data-entity-id="{{$book->id}}">
    <div class="entity-list-item-image bg-book" style="background-image: url('{{ $book->getBookCover() }}')">
        @icon('book')
    </div>
    <div class="content">
        <h4 class="entity-list-item-name break-text">{{ $book->name }}</h4>
        <div class="entity-item-snippet">
            <p class="text-muted break-text mb-s">{{ $book->getExcerpt() }}</p>
        </div>


    </div>
</a>
<div class="entity-shelf-books grid third gap-y-xs entity-list-item-children">
    @foreach((new BookStack\Entities\Managers\BookContents($book))->getTree(true) as $bookChild)
        <div>
                @if ($bookChild->isA('chapter'))
                    <a href="{{$bookChild->getUrl()}}" class="entity-chip text-book" style="color: var(--color-chapter) !important">
                    @icon('chapter')
                @else
                    <a href="{{$bookChild->getUrl()}}" class="entity-chip text-book">
                    @icon('page')
                @endif
                {{ $bookChild->name }}
            </a>
        </div>
    @endforeach
</div>