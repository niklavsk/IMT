@extends('master')

@push('title')
    How to Introduce a New Cat to Other Cats at Home
@endpush

@push('description')
    Introduce a new cat to your family without stress and panic. Read this article to know how to.
@endpush

@push('head')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "HowTo",
            "name": "How to introduce a new cat at home",
            "totalTime": "P1D",
            "estimatedCost": "Free",
            "image": "https://kadikis.id.lv/images/cats_together.jpg",
            "tool": [
                {
                    "@type": "HowToTool",
                    "name": "Scent Soakers: beds, blankets, carpets, cardboard scratchers and scratching posts"
                },
                {
                    "@type": "HowToTool",
                    "name": "Feeding bowls"
                }
            ],
            "supply": [
                {
                    "@type": "HowToSupply",
                    "name": "Cat Food"
                },
                {
                    "@type": "HowToSupply",
                    "name": "A door that can be closed"
                },
                {
                    "@type": "HowToSupply",
                    "name": "Separate Base Camp: any room of your house"
                }
            ],
            "step": [
                {
                    "@type": "HowToStep",
                    "position": "1",
                    "name": "Home Preparation",
                    "image": "https://kadikis.id.lv/images/home.jpg",
                    "text": "Prepare your home - be ready to welcome the new cat. Prepare all the necessary supplies and tools.",
                    "url": "https://kadikis.id.lv/how-to-introduce-a-new-cat-to-other-cats-at-home#step1"
                },
                {
                    "@type": "HowToStep",
                    "position": "2",
                    "name": "Prepare you existing cat",
                    "image": "https://kadikis.id.lv/images/existing_cat.jpg",
                    "text": "It is very important to switch the existing cat to a routine feeding, so that when the newcomer arrives, you could feed them at the same time",
                    "url": "https://kadikis.id.lv/how-to-introduce-a-new-cat-to-other-cats-at-home#step2"
                },
                {
                    "@type": "HowToStep",
                    "position": "3",
                    "name": "Prepare a separate base camp",
                    "image": "https://kadikis.id.lv/images/base_camp.jpg",
                    "url": "https://kadikis.id.lv/how-to-introduce-a-new-cat-to-other-cats-at-home#step3",
                    "text": "Your new cat will need a place where it can isolate and feel comfortable. Don't forget to place the scent soakers there."
                },
                {
                    "@type": "HowToStep",
                    "position": "4",
                    "name": "Site swapping",
                    "image": "https://kadikis.id.lv/images/cat_swap.jpg",
                    "url": "https://kadikis.id.lv/how-to-introduce-a-new-cat-to-other-cats-at-home#step4",
                    "text": "When your new cats start to feel comfortable at its safe base camp, you can let him explore your existing cat's territory. And at the same time you can let the other cat explore your new cat's territory. Very important: cats should not meet while exploring each other's territories!"
                },
                {
                    "@type": "HowToStep",
                    "position": "5",
                    "name": "Eating together",
                    "image": "https://kadikis.id.lv/images/eating.jpg",
                    "url": "https://kadikis.id.lv/how-to-introduce-a-new-cat-to-other-cats-at-home#step5",
                    "text": "Feed your cats together by placing two bowls on the different sides of the closed door. Each time place bowls closer to each other."
                },
                {
                    "@type": "HowToStep",
                    "position": "6",
                    "name": "Introduction",
                    "image": "https://kadikis.id.lv/images/introduction.jpg",
                    "url": "https://kadikis.id.lv/how-to-introduce-a-new-cat-to-other-cats-at-home#step6",
                    "text": "Open a door of the room that is a base camp for your new cat only slightly - so that the existing cat can see the new cat, but not enter it's base camp."
                },
                {
                    "@type": "HowToStep",
                    "position": "7",
                    "name": "Letting the new cat out",
                    "image": "https://kadikis.id.lv/images/letting_out.jpg",
                    "url": "https://kadikis.id.lv/how-to-introduce-a-new-cat-to-other-cats-at-home#step7",
                    "text": "When both of your cats start feeling comfortable, you can let your new cat out of the base camp. Voila"
                }
            ]
        }
    </script>
@endpush

@push('content')
    <div class="text-center">
        <h1 class="mb-5">How to Introduce a New Cat to Other Cats at Home</h1>
    </div>
    <h2>Hello dear cat owners!</h2>
    <p>
        It is well known thing cats are living beings and living beings may be sensitive.
        That is why it is of an urgent importance to know what is the proper way to introduce the newly adopted cat
        to the new home and the cats that already live there.
    </p>
    <figure class="wp-block-image size-large is-resized">
        <div class="text-center m-3">
            <img
                src="{{URL::to('/')}}/images/donalds.jpg"
                alt="Red cat sitting on the shelf" class="img-fluid" width="300" height="563"/>
        </div>
    </figure>
    <h4 id="step1">Step 1 - The new home</h4>
    <p>
        Prepare your home - be ready to welcome the new cat. Prepare all the necessary supplies and tools.
    </p>
    <div class="text-center m-3">
        <img src="{{URL::to('/')}}/images/home.jpg" alt="Well-designed home interior" class="img-fluid" width="500" />
    </div>
    <h4 id="step2">Step 2 - Your existing cat</h4>
    <p>
        Before you bring your new cat home, there are some fundamental steps to accomplish that will give you a
        significant leg up on the process:
    </p>
    <div class="text-center mb-3">
        <img src="{{URL::to('/')}}/images/existing_cat.jpg" alt="Cat sitting in a basket"
             class="img-fluid" width="600" />
    </div>
    <p>
        No free-feeding – Make sure you have switched your existing cat over to a routine of meal feeding, rather than free feeding her.
        This concept is foundational to my approach, and nowhere is it more important than during the introduction process.
        Once these scheduled meal times are established, it will set the stage for both your existing cat and your
        newcomer to experience a shared, ritualistic way of being: they get fed, around the same time,
        x-number of times per day. (More specifics about this shared meal time in a moment.)
    </p>
    <h4 id="step3">Step 3 - Separate Base Camp (and the mandatory isolation phase)</h4>
    <p>
        Base camp is a defined area of your home that is the heart of a cat’s territory.
        So first, decide where you’re going to set up base camp for the new cat,
        so he feels like this space is essentially all his own. This could be the master or a spare bedroom,
        an office, or even the bathroom when there is no other option. As long as the human scent is strong,
        it will help the cat establish a sense of home by commingling scents.
    </p>
    <div class="text-center mb-3">
        <img src="{{URL::to('/')}}/images/base_camp.jpg" alt="Bed sheets" class="img-fluid" width="500" />
    </div>
    <p>In addition, here are a few other important elements associated with successful base camp protocol:</p>
    <ul>
        <li>
            <strong>Scent soakers:</strong>&nbsp;
            Because cats are all about scent, make sure that you have plenty of “scent soakers” in their base camp.
            Scent soakers are soft items that absorb a cat’s scent, and basically say “I live here,” and allow for rubbing,
            scratching, or lying in. Beds, blankets, carpets, cardboard scratchers, and scratching posts are all excellent
            scent soakers.
        </li>
        <li>
            <strong>No Peeking</strong>:
            One of the hallmarks of this integration method is that the
            new cat and the resident will not initially lay eyes on each other. This is non-negotiable.
            Ignore this part of the introduction process at your own peril!
        </li>
    </ul>
    <p>Once your new cat demonstrates a notable comfort level in has base camp, it’s time for…</p>
    <h4 id="step4">Step 4 - Site Swapping</h4>
    <p>
        This is where each cat gets to explore the other’s territory without ever
        laying eyes on each other. This is also an opportunity for key signposts—like cat trees, litter boxes,
        etc.—to take on a shared scent. This is crucial to the “getting to know you” process with cats,
        since so much of their communication is based on scent.
    </p>
    <img src="{{URL::to('/')}}/images/cat_swap.jpg" alt="Several cats looking at the photographer"
         class="img-fluid mb-2" width="300" />
    <p class="mb-2"><b>Follow this simple process for harmonious site swapping:</b></p>
    <ol>
        <li>Carry the newcomer out of his base camp, put him in the bathroom, and shut the door.</li>
        <li>Allow the resident cat to walk into the newcomer’s base camp, then shut that door.</li>
        <li>Allow the newcomer to explore the rest of the home.</li>
        <li>Rinse and repeat.</li>
    </ol>
    <h4 id="step5" class="mb-4">Step 5 - The “Other Side of the Door” Feeding Ritual</h4>
    <div class="text-center mb-3">
        <img src="{{URL::to('/')}}/images/eating.jpg" alt="Cat is drinking from fine glass"
             class="img-fluid" width="400" />
    </div>
    <p>
        This feeding ritual, which is all about creating a positive association between the newcomer
        and the resident cat, has evolved over the years, but by and large has always worked for me.
        What’s involved? Very simply, mealtime will consist of bowls set up on either side of a closed door.
        These bowls should start out far enough apart so the cats will walk up, eat, and walk away without incident,
        but close enough that they sense there’s another cat on the other side of the door.
        From there, we gradually move the bowls closer.
    </p>
    <h4 id="step6">Step 6 - Introduction</h4>
    <p>
        Open the door a little bit - let you new cat see and smell the existing one and vice versa.
    </p>
    <div class="text-center mb-3">
        <img src="{{URL::to('/')}}/images/introduction.jpg" alt="Cat displayed on a polaroid photograph"
             class="img-fluid" width="500" />
    </div>
    <h4 id="step7" class="mb-3">
        Step 7 - Don't forget to give your cat freedom when he feels comfortable enough to get out of the room
    </h4>
    <div class="text-center mb-3">
        <img src="{{URL::to('/')}}/images/letting_out.jpg" alt="Cat is walking on the piano keys"
             class="img-fluid" width="500" />
    </div>
    <p>
        And by the way, your new cat will let you know when he’s ready to move out of
        base camp and explore the other parts of the house. (It could be anywhere from a few hours to a few days.)
    </p>
    <div class="text-center mb-3">
        <img src="{{URL::to('/')}}/images/cats_together.jpg" alt="Cats and cat owner are enjoying time together"
             class="img-fluid" width="500" />
    </div>
@endpush
