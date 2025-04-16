<footer class="bg-gray-900 text-white text-center p-6 mt-10">
<div>
    <div class="footer-contacts">
        <p>Phone:</p>
        <ul>
            @foreach($phone as $item)
                <li>{{ $item->phone }}</li>
            @endforeach
        </ul>
    
        <p>Email:</p>
        <ul>
            @foreach($email as $item)
                <li>{{ $item->email }}</li>
            @endforeach
        </ul>
    
        <p>Follow us:</p>
        <ul>
            @foreach($social_media as $item)
                <li><a target="_blank" href="{{ $item->url }}">{{ $item->platform }}</a></li>
            @endforeach
        </ul>
    </div>
    
</div>
    <p>&copy; 2025 CV Wiljantoro Mukti. All Rights Reserved.</p>
</footer>
