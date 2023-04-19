# README: Twin Cities Application

This Application presents the user with two interactive maps, Liverpool and New Orleans and the weather information for each of these cities gathered using an API. On these maps the user is presented with 6 points of interest in each city which they can rollover and click on to receive more information such as a description and images of the points of interest. The application also features an RSS feed. Additionally a Flickr API is presented to the user with images grabbed from the locations hashtag on the Flickr website and a Twitter API has been partially implemented. 


## Requirements

This application requires the following files to be able to launch the site fully:     
    - [StyleSheet](link)   
    - [images](link)   
    For the database:  
    - [Access to MySQL software on machine: download here](https://dev.mysql.com/downloads/installer/)  
    
## Installation 

Install how you would normally install a zip file to your machine into a desired location.  
Unzip the file which contains all the relevant files to view and maintain the site. 


## Configuration 
This Application uses multiple API's.

To get the API keys:

  - [Weather API](https://openweathermap.org/api)  
  - [Map API](https://mapsplatform.google.com)
   

## Troubleshooting

**If only one map displays, check the following:**
- Ensure that in the body tag it has the method
 onload = "initialise()"   

 **If the database wont connect to your computer:**
 - Check the name of the new database on your PC is the same as the original database "twincity"


## FAQ
  
   **For More information on the application please view the [technical document](documentation\TwinCitiesDocumentation.docx)**

## Credits
- Lewis Carroll: Lewis2.Carroll@live.uwe.ac.uk
- Liam Upstone-Smith: Liam2.Upstone-Smith@live.uwe.ac.uk
- Zoe Stone: Zoe4.Stone@live.uwe.ac.uk
- Airen Ng: Airen.Ng@live.uwe.ac.uk
