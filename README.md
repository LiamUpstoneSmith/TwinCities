# README: Twin Cities Application

This Application presents the user with two interactive maps, Liverpool and New Orleans and the weather information for each of these cities gathered using an API. On these maps the user is presented with ((6))points of interest in each city which they can rollover and click on to receive more information such as a description and images of the points of interest. The application also features an RSS feed. Additionally a Flickr API is presented to the user with images grabbed from the locations hashtag on the Flickr website. 


## Requirements

This application requires the following files to be able to view the site fully:     
    - [StyleSheet](link)   
    - [images](link)   
    For the database:  
    - [Access to MySQL software on machine: download here](link)  
    - [Access to MySQL Workbench: dowload here](link)

## Installation 

Install how you would normally install a zip file to your machine into a desired location.  
Unzip the file which contains all the relevant files to view and maintain the site. 


### To install the mySQL database onto your computer: 
1. Open the mySQL program on your computer.
2. Install mySQL Workbench 
3. Connect to the existing database using mySQL Workbench
4. Go to Navigator -> Management -> Data Export 
3. Create Database on mySQL on desired PC, call it "twincity".
4. Go to Navigator -> Management -> Data import/Restore (This creates the tables in your target Database)


## Configuration 
This Application uses multiple API's.

To get the API keys:

  - [Weather API](link)  
  - [NewOrleans Map API](link)

## Troubleshooting

**If only one map displays, check the following:**
- Ensure that in the body tag it has the method
 onload = "initialise()"   

 **If the database wont connect to your computer:**
 - Check the name of the new database on your PC is the same as the original database "twincity"


## FAQ
  
   **For More information on the application please view the [technical document](link)**

## Credits
- Lewis Carroll: Lewis2.Carroll@live.uwe.ac.uk
- Liam Upstone-Smith: Liam2.Upstone-Smith@live.uwe.ac.uk
- Zoe Stone: Zoe4.Stone@live.uwe.ac.uk
- Airen Ng: Airen.Ng@live.uwe.ac.uk
