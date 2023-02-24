function initialize(){
    var LiverpoolOptions = {
        center: new google.maps.LatLng(53.408371, -2.991573),
        zoom: 11,
        mapTypeId: 'roadmap'
    };

    var NewOrleansOptions = {
        center: new google.maps.LatLng(29.951065, -90.071533),
        zoom: 11,
        mapTypeId: 'roadmap'
    }

    var map1 = new google.maps.Map(document.getElementById('LiverpoolMap'), LiverpoolOptions);
    var map2 = new google.maps.Map(document.getElementById('NOMap'), NewOrleansOptions);

    


    // Royal Albert Dock, Liverpool --------------------------------------------------------------------------------
    const RADContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">Royal Albert Dock</h1>' +
                '<div id="bodyContent">' +
                "<p>The Royal Albert Dock is a complex of dock buildings and warehouses in Liverpool, England." + 
                " Designed by Jesse Hartley and Philip Hardwick, it was opened in 1846.</p>" +
                '<a href="Liverpool/RoyalAlbertDock.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const RADInfo = new google.maps.InfoWindow({
        content: RADContent,
        ariaLabel: "Royal Dockers"
    })

    const RAD = { lat:53.39959 , lng: -2.99161};
    const  RADMarker = new google.maps.Marker({
        position: RAD,
        map: map1,
        title: "Royal Albert Docks",
    });

    RADMarker.addListener("click", () => {
        RADInfo.open({
            anchor:RADMarker,
            map: map1,
        })
    })


    // Anfield Stadium, Liverpool --------------------------------------------------------------------------------
    const AnfieldContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">Anfield Stadium</h1>' +
                '<div id="bodyContent">' +
                "<p>Anfield is a football stadium Home of Liverpool F.C. It has a seating capacity of 53,394, making it the seventh largest football stadium in England." + 
                " It was originally the home of Everton from 1884 to 1891, before they moved to Goodison Park after a dispute with the club president.</p>" +
                '<a href="Liverpool/Anfield.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const AnfieldInfo = new google.maps.InfoWindow({
        content: AnfieldContent,
        ariaLabel: "Anfield"
    })

    const Anfield = { lat:53.43089 , lng: -2.96069};
    const  AnfieldMarker = new google.maps.Marker({
        position: Anfield,
        map: map1,
        title: "Anfield",
    });

    AnfieldMarker.addListener("click", () => {
        AnfieldInfo.open({
            anchor:AnfieldMarker,
            map: map1,
        })
    })

 // Uni of Liverpool ----------------------------------------------------------------------------------------------
 const UniContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">University of Liverpool</h1>' +
                '<div id="bodyContent">' +
                "<p>The Univerity of Liverpool is a public research university based in the city of Liverpool, england. founded as a acollege in 1881, it gained its Royal" + 
                " Charter in 1903 with theability to award degrees, and is also known to be one of the six 'red brick' civic Universities.</p>" +
                '<a href="Liverpool/Uni.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const UniInfo = new google.maps.InfoWindow({
        content: UniContent,
        ariaLabel: "UniversityofLiverpool"
    })

    const Uni = { lat: 53.40482 , lng: -2.96506};
    const  UniMarker = new google.maps.Marker({
        position: Uni,
        map: map1,
        title: "University",
    });

    UniMarker.addListener("click", () => {
        UniInfo.open({
            anchor:UniMarker,
            map: map1,
        })
    })


// Safari --------------------------------------------------------------------------------------------------
const safariContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">Knowsley Safari Park</h1>' +
                '<div id="bodyContent">' +
                "<p>Start your adventure by exploring our impressive 5-mile safari drive which is currently home to over 750 fascinating animals, from baboons to camels." + 
                "  wildebeest to rhinos, all from the comfort of your own car. The drive through lion enclosure is a real highlight.</p>" +
                '<a href="Liverpool/safari.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const safariInfo = new google.maps.InfoWindow({
        content: safariContent,
        ariaLabel: "Knowsley Safari"
    })

    const safari = { lat: 53.435548513073996 , lng: -2.812764916137715};
    const  safariMarker = new google.maps.Marker({
        position: safari,
        map: map1,
        title: "Safari",
    });

    safariMarker.addListener("click", () => {
        safariInfo.open({
            anchor:safariMarker,
            map: map1,
        })
    })

// Gallery -----------------------------------------------------------------------------------------------
const galleryContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">Lady Lever Art Gallery</h1>' +
                '<div id="bodyContent">' +
                "<p>The Lady Lever Art Gallery is a museum founded and built by the industrialist and philanthropist William Lever, and opened in 1922. " + 
                "  The Lady Lever Art Gallery is set in the garden village of Port Sunlight, on the Wirral and one of the National Museums Liverpool.</p>" +
                '<a href="Liverpool/gallery.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const galleryInfo = new google.maps.InfoWindow({
        content: galleryContent,
        ariaLabel: "Lady Lever Art Gallery"
    })

    const gallery = { lat: 53.35581668202718 , lng: -2.9993381074381023};
    const  galleryMarker = new google.maps.Marker({
        position: gallery,
        map: map1,
        title: "Gallery",
    });

    galleryMarker.addListener("click", () => {
        galleryInfo.open({
            anchor:galleryMarker,
            map: map1,
        })
    })

    // park ---------------------------------------------------------------------------------------------

const parkContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">Central Park</h1>' +
                '<div id="bodyContent">' +
                "<p>A new park the size of Anfield and Goodison's pitches combined could be built in the city's north docks and form the next stage of the Liverpool Waters development." + 
                " According to Peel L&P, Central Park would bring direct access to parts of the Leeds Liverpool Canal for the first time in a number of years, with a section running from Canning Dock toward Waterloo Dock, Princes Dock and the Three Graces. </p>" +
                '<a href="Liverpool/park.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const parkInfo = new google.maps.InfoWindow({
        content: parkContent,
        ariaLabel: "Central Park"
    })

    const park = { lat: 53.4156963640061,  lng: -3.037507197838908};
    const  parkMarker = new google.maps.Marker({
        position: park,
        map: map1,
        title: "park",
    });

    parkMarker.addListener("click", () => {
        parkInfo.open({
            anchor:parkMarker,
            map: map1,
        })
    })




    // New Orleans ----------------------------------------------------------------------------------------

    // Jackson Square --------------------------------------------------------------------------------------
const JSContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">Jackson Square</h1>' +
                '<div id="bodyContent">' +
                "<p>Jackson Square, formerly the Place d'Armes (French) or Plaza de Armas (Spanish), is a historic park in the French Quarter of New Orleans, Louisiana. It was declared" + 
                "  a National Historic Landmark in 1960, for its central role in the city's history, and as the site where in 1803 Louisiana was made United States territory pursuant to the Louisiana Purchase.</p>" +
                '<a href="NewOrleans/jacksonSquare.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const JSInfo = new google.maps.InfoWindow({
        content: JSContent,
        ariaLabel: "Jackson Square"
    })

    const JS = { lat:29.95749578255605, lng: -90.06290513307968};
    const  JSMarker = new google.maps.Marker({
        position: JS,
        map: map2,
        title: "Jackson Square",
    });

    JSMarker.addListener("click", () => {
        JSInfo.open({
            anchor:JSMarker,
            map: map2,
        })
    })

    // Lakeside Shopping Centre ---------------------------------------------------------------------------
const LSContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">Lakeside Shopping Centre</h1>' +
                '<div id="bodyContent">' +
                "<p>Lakeside Shopping Center, or simply Lakeside, is a shopping mall located at 3301 Veterans Memorial Boulevard in the New Orleans suburb of Metairie, Louisiana, United States." + 
                "  It opened on March 24, 1960 as the first regional shopping mall in New Orleans and is the largest and busiest mall in Greater New Orleans.</p>" +
                '<a href="NewOrleans/lakeSide.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const LSInfo = new google.maps.InfoWindow({
        content: LSContent,
        ariaLabel: "LakeSide Shopping Centre"
    })

    const LS = { lat:30.00690, lng: -90.15712};
    const  LSMarker = new google.maps.Marker({
        position: LS,
        map: map2,
        title: "Lakeside Shopping Centre",
    });

    LSMarker.addListener("click", () => {
        LSInfo.open({
            anchor:LSMarker,
            map: map2,
        })
    })


    // Chalmette Battlefield -------------------------------------------------------------------
const CBContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">Chalmette Battlefield</h1>' +
                '<div id="bodyContent">' +
                "<p>Jean Lafitte National Historical Park and Preserve (French: Parc historique national et réserve Jean Lafitte) protects the natural and cultural resources of Louisiana's Mississippi River Delta region." + 
                " It is named after French pirate Jean Lafitte and consists of six separate sites and a park headquarters</p>" +
                '<a href="NewOrleans/chalmetteBattlefield.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const CBInfo = new google.maps.InfoWindow({
        content: LSContent,
        ariaLabel: "Chalmette Battlefield"
    })

    const CB = { lat:29.94273, lng: -89.99092};
    const  CBMarker = new google.maps.Marker({
        position: CB,
        map: map2,
        title: "Chalmette Battlefield",
    });

    CBMarker.addListener("click", () => {
        CBInfo.open({
            anchor:CBMarker,
            map: map2,
        })
    })


    // Caesars Superdome -----------------------------------------------------------------------
    const saintsContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">Caesars Superdome</h1>' +
                '<div id="bodyContent">' +
                "<p>The Caesars Superdome, commonly known as the Superdome (formerly known as Mercedes-Benz Superdome and Louisiana Superdome)," + 
                " is a multi-purpose stadium located in the Central Business District of New Orleans, Louisiana. It is the home stadium of the New Orleans Saints of the National Football League</p>" +
                '<a href="NewOrleans/caesarsSuperdome.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const saintsInfo = new google.maps.InfoWindow({
        content: saintsContent,
        ariaLabel: "Caesars Superdome"
    })

    const saints = { lat:29.95110, lng: -90.08117};
    const  saintsMarker = new google.maps.Marker({
        position: saints,
        map: map2,
        title: "Caesars Superdome",
    });

    saintsMarker.addListener("click", () => {
        saintsInfo.open({
            anchor:saintsMarker,
            map: map2,
        })
    })


    // National WW2 Museum --------------------------------------------------------------------
    const ww2Content = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">The National WW2 Museum</h1>' +
                '<div id="bodyContent">' +
                "<p>The National WWII Museum, formerly known as The National D-Day Museum, is a military history museum located in the Central Business District of New Orleans, Louisiana," + 
                " U.S., on Andrew Higgins Drive between Camp Street and Magazine Street. The museum focuses on the contribution made by the United States to Allied victory in World War II.</p>" +
                '<a href="NewOrleans/ww2Museum.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const ww2Info = new google.maps.InfoWindow({
        content: ww2Content,
        ariaLabel: "The National WW2 Museum", 
    })

    const ww2 = { lat:29.94309, lng: -90.07053};
    const  ww2Marker = new google.maps.Marker({
        position: ww2,
        map: map2,
        title: "The National WW2 Museum",
    });

    ww2Marker.addListener("click", () => {
        ww2Info.open({
            anchor:ww2Marker,
            map: map2,
        })
    })


    // Mardi Gras World ------------------------------------------------------------------------
    const MGContent = 
                '<div id="content">' +
                '<div id="siteNotice">' +
                "</div>" +
                '<h1 id="firstHeading" class="firstHeading">Mardi Gras world</h1>' +
                '<div id="bodyContent">' +
                "<p>Mardi Gras World (also known as Blaine Kern's Mardi Gras World, MGW) is a tourist attraction located in New Orleans." + 
                "  Guests tour the 300,000 square foot working warehouse where floats are made for Mardi Gras parades in New Orleans.</p>" +
                '<a href="NewOrleans/mardiGrasWorld.html"><button type="button">More Info</button></a>' + 
                "</div>" +
                "</div>";

    const MGInfo = new google.maps.InfoWindow({
        content: MGContent,
        ariaLabel: "Mardi Gras world", 
    })

    const MG = { lat:29.93505, lng: -90.06147};
    const  MGMarker = new google.maps.Marker({
        position: MG,
        map: map2,
        title: "Mardi Gras world",
    });

    MGMarker.addListener("click", () => {
        MGInfo.open({
            anchor:MGMarker,
            map: map2,
        })
    })


}
window.initialize = initialize();