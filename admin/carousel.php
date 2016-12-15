            <ul class="ul_carousel">
                <li class="li_carousel visible"><img class="img_carousel" src="image/foo-fighters.jpg" alt="" width="100%">
                </li>
                <li class="li_carousel hidden"><img class="img_carousel" src="image/iron-maiden.jpg" alt="" width="100%"></li>
                <li class="li_carousel hidden"><img class="img_carousel" src="image/johnny-cash.jpg" alt="" width="100%" style = "height: 389px;" ></li>
            </ul>

            <div class = "gen" >
                <div id="0" class="active rond"></div>
                <div id="1" class="rond"></div>
                <div id="2" class="rond"></div>
            </div>
        </main>
    </body>

    <script type="text/javascript">

        var liste = document.querySelectorAll('.rond');//queryselector all renvoie tous les elements qui porte la classe rond 
        var show = function(focus)  
        {
            var id=focus.id;
            var liste = document.querySelectorAll('.li_carousel');//queryselector all renvoie tous les elements qui porte la classe li
            for(var i=0; i<5; i++) 
            {
                if (i == id )
                {
                    liste[i].classList.remove('hidden');
                    liste[i].classList.add('visible');
                }
                else
                {  
                    liste[i].classList.remove('visible');
                    liste[i].classList.add('hidden');
                }

            }
        }

        for(var i = 0 ; i<5; i++)  
        {
            liste[i].addEventListener('click', function(event) //addevenlistener sert à écouter l'element "click" / function(event)=fonction anonyme 
            {
                for (var i = 0; i < liste.length; i++) {
                    liste[i].classList.remove('active');
                }         
                var id = event.target.id;
                event.target.classList.add('active');
                show(event.target); //event.target c'est pour selectionner l'element sur lequel on a cliqué 
            });

        }

    </script>
