@extends('master')

@push('title')
    How to Care for Street Cats
@endpush

@push('head')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [
                {
                    "@type": "Question",
                    "name": "Where can I keep them?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<h6>Give Them Shelter </h6>\n    <p>Feral cats need a space where they can escape the rain and extreme temperatures of winter and summer. You don't\n        need to create anything too fancy — a simple plastic storage bin is more than enough to keep the kitties comfy.\n        Cut a hole in the side of the bin and line it with something cozy like straw. In the winter, place the bin\n        inside a larger one and add some foam board insulation between them. </p>"
                    }
                },
                {
                    "@type": "Question",
                    "name": "What do I feed them with?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<h6>Feed Them Dry Food Mostly </h6>\n    <p>One of the kindest things you can do is give outside kitties some yummy wet or dry food to keep their tummies\n        full. But don't leave wet food out for long if they aren't interested in it, as it's more likely to grow\n        bacteria that can make them sick. </p>\n    <p>Protect the food from inclement weather by placing it on a covered patio or set up a little tarp\n        between two plastic-bin shelters and put the food there. Remember to clean the area daily to keep\n        insects and other pests away.</p>"
                    }
                },
                {
                    "@type": "Question",
                    "name": "What do they drink?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<h6>Fresh Water</h6>\n    <p>A fresh bowl of water will help the stray felines stay hydrated. Place the bowl outside your kitty shelters to\n        prevent them from becoming damp and yucky. If possible, look for a solar-powered heated water dish to keep the\n        water from freezing in winter. </p>"
                    }
                },
                {
                    "@type": "Question",
                    "name": "Whom should I contact?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<h6>Contact a Rescue Group Practicing Trap-Neuter-Return </h6>\n    <p>Many nonprofit organizations provide trap-neuter-return, or TNR, services, or can refer you to a local group\n        that does. This way, the strays will be spayed or neutered so they can't reproduce, reducing the amount of\n        hungry mouths for you and your neighbors to feed. Once the procedure is finished, the kitties are safely\n        returned to the neighborhood — plus they'll get a health check while at the vet.</p>"
                    }
                },{
                    "@type": "Question",
                    "name": "Do they really need my help?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<h6>First of all, determine if Cats are Actually Homeless</h6>\n    <p>It's easy to assume a cat outside without a collar is a stray, but that furry feline might just be someone's pet.\n        Check with your neighbors to determine if any cats in question have owners. If possible, ask owners to place\n        collars on their furry friends so no one will think they are strays. </p>\n    <p>Some outdoor-owned kitties have microchips placed between their shoulder blades for identification. These can be\n        read by a Universal Microchip Scanner. This way, a vet or shelter worker can find out the owner's contact\n        information if the kitty is lost or mistaken for a stray. </p>"
                    }
                },{
                    "@type": "Question",
                    "name": "Maybe I can take them?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "<h6>Consider Finding a Home for a Stray</h6>\n    <p>If you find a lone cat or litter of kittens who are not feral, or adapted to the wild, check with local rescue\n        organizations to see about finding the felines forever homes. Look for no-kill shelters and rescue\n        organizations. You can also continue helping already sheltered cats by volunteering at local rescue\n        shelters.</p>\n    <p>Note that if you befriend a cat who's happily feral, allow him to live within his outdoor colony, even if he\n        seems to like being around you for a visit. Feral cats in colonies have their own social hierarchies and\n        societies. If taken away from the colony, feral cats get anxious and often become chronically ill. Worse yet,\n        feral cats often wind up scared, afraid and un-adoptable in animal shelters, whereas they have a better chance\n        at a fulfilling life (albeit possibly shorter), if left in their colony. </p>"
                    }
                }
            ]
        }
    </script>
@endpush

@push('content')
    <h1>How to Care for Street Cats</h1>

    <h4>Hello dear cat lovers!</h4>

    <p>Your furry feline provides you with love and joy every single day, and in return, you give him mounds of
        snuggles, love and most importantly, treats. But not all cats are so lucky. There are feral cats outside who
        don't have loving homes. If you've seen stray felines around your neighborhood, there are many ways you can help
        improve their lives — even when you're not able to take another kitty into your home. You may have questions...
        and we for sure have answers to them!</p>

    <figure class="wp-block-image size-large is-resized">
        <img src="{{ url('/images/care-1.jpg') }}" alt="" class="half-width"/>
        <figcaption>"Wouldn't you like to adopt her?"</figcaption>
    </figure>

    <h5>Where can I keep them?</h5>
    <h6>Give Them Shelter </h6>
    <p>Feral cats need a space where they can escape the rain and extreme temperatures of winter and summer. You don't
        need to create anything too fancy — a simple plastic storage bin is more than enough to keep the kitties comfy.
        Cut a hole in the side of the bin and line it with something cozy like straw. In the winter, place the bin
        inside a larger one and add some foam board insulation between them. </p>

    <h5>What do I feed them with?</h5>
    <h6>Feed Them Dry Food Mostly </h6>
    <p>One of the kindest things you can do is give outside kitties some yummy wet or dry food to keep their tummies
        full. But don't leave wet food out for long if they aren't interested in it, as it's more likely to grow
        bacteria that can make them sick. </p>
    <p>Protect the food from inclement weather by placing it on a covered patio or set up a little tarp
        between two plastic-bin shelters and put the food there. Remember to clean the area daily to keep
        insects and other pests away.</p>

    <h5>What do they drink?</h5>
    <h6>Fresh Water</h6>
    <p>A fresh bowl of water will help the stray felines stay hydrated. Place the bowl outside your kitty shelters to
        prevent them from becoming damp and yucky. If possible, look for a solar-powered heated water dish to keep the
        water from freezing in winter. </p>

    <h5>Whom should I contact?</h5>
    <h6>Contact a Rescue Group Practicing Trap-Neuter-Return </h6>
    <p>Many nonprofit organizations provide trap-neuter-return, or TNR, services, or can refer you to a local group
        that does. This way, the strays will be spayed or neutered so they can't reproduce, reducing the amount of
        hungry mouths for you and your neighbors to feed. Once the procedure is finished, the kitties are safely
        returned to the neighborhood — plus they'll get a health check while at the vet.</p>

    <h5>Do they really need my help?</h5>
    <h6>First of all, determine if Cats are Actually Homeless</h6>
    <p>It's easy to assume a cat outside without a collar is a stray, but that furry feline might just be someone's pet.
        Check with your neighbors to determine if any cats in question have owners. If possible, ask owners to place
        collars on their furry friends so no one will think they are strays. </p>
    <p>Some outdoor-owned kitties have microchips placed between their shoulder blades for identification. These can be
        read by a Universal Microchip Scanner. This way, a vet or shelter worker can find out the owner's contact
        information if the kitty is lost or mistaken for a stray. </p>

    <h5>Maybe I can take them?</h5>
    <h6>Consider Finding a Home for a Stray</h6>
    <p>If you find a lone cat or litter of kittens who are not feral, or adapted to the wild, check with local rescue
        organizations to see about finding the felines forever homes. Look for no-kill shelters and rescue
        organizations. You can also continue helping already sheltered cats by volunteering at local rescue
        shelters.</p>
    <p>Note that if you befriend a cat who's happily feral, allow him to live within his outdoor colony, even if he
        seems to like being around you for a visit. Feral cats in colonies have their own social hierarchies and
        societies. If taken away from the colony, feral cats get anxious and often become chronically ill. Worse yet,
        feral cats often wind up scared, afraid and un-adoptable in animal shelters, whereas they have a better chance
        at a fulfilling life (albeit possibly shorter), if left in their colony. </p>
@endpush
