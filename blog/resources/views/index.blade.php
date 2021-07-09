@extends('layouts.app')

@section ('content')
<div class="background-image grid grid-cols-1 m-auto">
<div class="flex text-gray-100 pt-10">
<div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
<h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
this is the first blog 
</h1>
<a href="/blog"
class="text-center bg-gray-50 text-gray-700 py-2 px-4
font-bold tet-xl uppercase">
read more
</a>
</div>
</div>
</div>

<div class =" sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 boder-b
border-gray-200">
<div> 
    <img src="https://post.greatist.com/wp-content/uploads/2020/08/full-moon-night-landscape-732x549-thumbnail-1.jpg"  width="400" >
</div>
<div class ="m-auto sm:m-auto text-left w4/5 block">
    <h2 class ="text-3xl font-extrabold text -gray-600">
      MOON
</h2>
<p class="py-8 text-gray-500 text-s">
The Moon is Earth's only natural satellite. At about 
one-quarter the diameter of Earth, it is the largest
 natural satellite in the Solar System relative to the
  size of its planet, the fifth largest satellite in 
  the Solar System overall, and is larger than any known dwarf planet.</p>
    <p class ="font-extrabold text -gray-600 text-s pb-9">
</p>
<a 
href ="/blog"
class ="uppercase bg-blue-500 text-gray-100 text-s
font-extrabold py-3 px-8 rounded-3xl">
find out more
</a>
</div>
</div>
<div class ="text-center p-15 bg-black text-white">
<h2 class="text-2xl pb-5 text-l">
  i am lakhwinder singh
</h2>
<span class ="font-extrabold block text-4xl py-1">
    this is the first page second page of blog 
<span class ="font-extrabold block text-4xl py-1">
you can go using the header (blog) link
</span>
<span class ="font-extrabold block text-4xl py-1">
when you can login in then show you create 
button on the blog screen
</span>
<span class ="font-extrabold block text-4xl py-1">
    backend database used mysql 
</span>
</div>
<div class ="text-center py-15">
    <span class="uppercase text-s text-gray-400">
        blog 
</span>

<h2 class="text-4xl font-bold py-10">
recent posts
</h2>
<p class="py-8 text-gray-500 text-s">
    this is previous post
</p>
</div>
<div class="sm:grid grid-cols-2 w-4/5 m-auto">
<div class ="flex bg-yellow-700 text-gray-100 pt-10">
 <div class ="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
<span class="uppercase text-xs">
    <span>
        <h3 class="text-xl font-bold py-10">
         this is your recent view blog
</h3>
<a href=""
class="uppercase bg-transparent border-2
boorder-gray-100 text-gray-100 text-xs font-extrabold
py-3 px-5 rounded-3xl">
find out more here
</a>
</div>
</div>
<div>
    <img src="https://1.bp.blogspot.com/-LB0MrCZj1G4/XxwdbCm5_1I/AAAAAAAAEJs/UdsCLPE7lX0uPFOBsHb_C6ORVHCfwdRuwCLcBGAsYHQ/s1600/Dark%2BBlack%2BMobile%2Bphone%2BWallpaper%2Bultra%2Bhd%2B4K%2B%25286%2529.jpg" height="200" width="200" >
</div>  
</div>


@endsection