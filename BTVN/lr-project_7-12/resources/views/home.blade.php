<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    @foreach($posts as $post)
        <p>{{ $post->content }}</p> 
    @endforeach
</div>
