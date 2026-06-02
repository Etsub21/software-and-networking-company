<h1>Software & Networking Company</h1>

@foreach($projects as $project)
    <div>
        <h3>{{ $project->title }}</h3>
        <p>{{ $project->description }}</p>
    </div>
@endforeach


<hr>

<h2>Contact Us</h2>

<form action="/contact" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Your Name">

    <input type="email" name="email" placeholder="Your Email">

    <textarea name="message" placeholder="Your Message"></textarea>

    <button type="submit">Send</button>
</form>