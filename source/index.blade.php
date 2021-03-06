---
pagination:
    collection: posts
    perPage: 4
---
@extends('_layouts.master', ['page_name' => 'home'])

@section('body')

<section id="about" class="section u-text-center">
  <div class="about-img">
    <img class="about-img__image" src="/assets/images/garrett.png" alt="Garrett Dengler Charlotte NC Web Craftsman">
  </div>
  <h1 class="type--title"><small>Charlotte, NC</small><br>Web Craftsman</h1>
  <div class="container">
    <p>My name is Garrett Dengler and I'm a senior developer at <a href="https://atypiccraft.com" target="_blank">Atypic</a>.</p>
    {{-- <img src="/assets/images/mac.png" width="191" height="253" alt="Backend and frontend developer" > --}}
    <p>&nbsp;</p>
    <h2 class="type--subheading">Backend developer with frontend tendencies</h2>
    <p>My bread and butter is Laravel / PHP development but I'm known to dabble in some frontend goodness. Some of my areas of expertise include (but are not limited to): Server management, PHP, Laravel, JavaScript, jQuery, Vue.js, SQL, MongoDB, HTML, CSS, SASS, and SCSS.</p> 
    <p>&nbsp;</p>
    <h2 class="type--subheading">Award winning developer</h2>
    <p>Not to brag but my teammate and I won second place in the SkillsUSA National Skills and Leadership Conference in 2011 for Web Design in the Post-Secondary division. After that I've gone on to help create some pretty groundbreaking work with <a href="https://atypiccraft.com" target="_blank">Atypic</a></p>
    
  </div>
</section>
<section id="blog" class="section u-text-center">
  <h2 class="type--title">Random Thoughts</h2>
  @if($pagination->items->count() > 0)
    <ul class="post-list">
      @foreach ($pagination->items as $post)
      <li class="post-list__item"><a href="{{ $post->getUrl() }}"
          title="Read more - {{ $post->title }}"
          class=""
          >{{ $post->title }}</a>
      </li>
      @endforeach
    </ul>
    @if($pagination->pages->count() > 1)
    <a class="cta" href="/blog">Archive</a>
    @endif
  @else
    <p>I haven't written anything :-(</p>  
  @endif
</section>
<section id="contact" class="section u-text-center">
  <h2 class="type--title">Let's Chat</h2>
  <div class="container">
    <p>I'm very dedicated to my work at Atypic but if you have a small freelance project, need a consultant for a project, have a bug you just can't figure out, or just want to chat: my inbox is always open!</p>
    <form class="form">
      <label class="form__label" for="contact-name">Name:</label>
      <input class="form__input" type="text" id="contact-name" name="name">
      <label class="form__label" for="contact-email">Email:</label>
      <input class="form__input" type="email" id="contact-email" name="email">
      <label class="form__label" for="contact-message">Message:</label>
      <textarea class="form__textarea" id="contact-message" name="message"></textarea>
      <button class="cta" type="submit">Send</button>
    </form>
  </div>
</section>


@endsection
