[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/Metacert/functions?utm_source=RapidAPIGitHub_MetacertFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# Metacert Package
The MetaCert Security API allows you to look up the classification or reputation of URLs and IP addresses against our “Malware & Phishing” and “Pornography” collections. We will add more categories in the coming months.
* Domain: [Metacert](http://https://www.metacert.com/)
* Credentials: apiKey

## How to get credentials: 
0. Submit your request for apiKey at [Signup page](https://developer.metacert.com/signup/)



## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## Metacert.analyzeUrl
Analyze provided URL

| Field | Type       | Description
|-------|------------|----------
| apiKey| credentials| Your API key
| url   | String     | Url for analysis

