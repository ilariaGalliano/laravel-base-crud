@extends('layouts.main')

 @section('content')   

    <main>
       <div class="container">
            <h1 class="text-center mt-5">Books:</h1>

            <h3 class="mb-5">Why is reading so important?</h3>
            <p>Studies show that reading for pleasure makes a big difference to children’s educational performance. Here’s how you can get your child 
                off to a great start. 
                Evidence suggests that children who read for enjoyment every day not only perform better in reading tests than those who don’t, 
                but also develop a broader vocabulary, increased general knowledge and a better understanding of other cultures.
            </p> 

            <p>For starters, reading helps to expand the mind and give us more ideas. Reading has been proven to keep our minds young, healthy and sharp, 
                with studies showing that reading can even help prevent alzheimer’s disease.
                The study closely examined 294 eldery women and men in their 80s, and gave them mentally stimulating tasks, including reading and writing. 
                They were also given memory and thinking tests annually in their last years to keep track of their progress. After they died, autopsies showed that 
                those who had engaged in such activities had a slower rate of memory decline compared to those who hadn’t read.
                Reading also develops the imagination and allows us to dream and think in ways that we would have never been able to before.
            </p>
            <p>
                Another one of the many reasons why reading is important is that it allows for creative thinking. Reading can inspire you when you are feeling bored, 
                down or in a rut.. It can help give you that very needed pick-me-up without having to search too far for it. Reading helps get the creative side of your 
                brain thinking, unlike television that really does not use much creative brain power.
                If you are still unconvinced or unsure about the importance of reading, or feel as though it’s not beneficial for you personally, then it’s important to note that 
                reading actually helps improve concentration. Reading can train our mind how to focus properly, which is invaluable in nearly everything we do on a daily basis — whether 
                it be as we study or even in our careers and in our personal relationships. We could all benefit from practicing our concentration skills.
            </p>

            <p class="font-weight-bold">Click <a style="color: #058e24;" href="{{ route('books.index') }}">Here</a> to discover a stack of books that I absolutely loved – each of them is so different 
               but they all have a special place on my book shelf!  
            </p>
       </div>
    </main>

@endsection
