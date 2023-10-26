@extends('layouts.main', [
    'current_page' => 'index'
])

@section('content')


    <h1>Hello mate!</h1>
    <h2>This is a book shop!</h2>

    <p>Bacon ipsum dolor amet salami chislic sirloin cupim. Burgdoggen capicola hamburger venison tenderloin landjaeger leberkas salami porchetta. Brisket spare ribs kielbasa, doner alcatra picanha capicola t-bone ribeye pork chop corned beef pastrami pork loin. Pork landjaeger burgdoggen chicken corned beef tongue buffalo kielbasa tri-tip pork loin. Shank ball tip kevin landjaeger filet mignon picanha alcatra drumstick bresaola leberkas ribeye. Boudin ribeye salami, turkey kielbasa tri-tip pork chop capicola kevin. Tenderloin kielbasa pork loin tongue corned beef turducken, boudin tail chuck bresaola filet mignon tri-tip beef cow swine.</p>

    <p>Prosciutto chuck leberkas porchetta meatloaf. Sirloin hamburger bacon beef ribs, beef shoulder tri-tip. Chislic turkey pork belly sirloin jowl. Ribeye picanha pork loin filet mignon. Pig ribeye pork loin beef.</p>

    @include('common.search')

    <h2>10 Newest Crime Books</h2>
   
        <table class="book">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Price</th>
            </tr>
            @foreach ($crime_books as $book)
                <tr>
                    <td>{{$book->title}}</td>
                    <td>{{$book->authors->pluck('name')->join(', ')}}</td>
                    <td>${{$book->price}}</td>
                </tr>
            @endforeach
        </table>
    

@endsection