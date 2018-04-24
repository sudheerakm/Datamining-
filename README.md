# Datamining-To examine the relationship between financial news, tweets and market behavior

we analyze a corpus of daily news of the https://newsapi.org/ using News API from 14th February to 26th March 2018.  We used a Python
library called Tweepy to connect to Twitter Streaming API and downloaded the data daily from 12th February to 26th February 2018 between
3pm-4pm. For stocks data we used yahoo finance website to download csv file from 12th February to 26th March 2018.
list of companies under study.	

Company Name	Ticker Symbol
Apple	         AAPL
Google	       GOOG
Sony	         SNE
 	 
Once the data was collected it was then preprocessed and filtered in relation to the above stocks related discussions only. 
All the above collected data was then inserted into the MySQL by running a cron job for 10 days and tables are used for further
processing and calculations.

Findings: We find a positive correlation between the daily number of mentions of the above companies in the Tweets, News, daily 
stocks close prices and daily transactions volume of a company's stock after the tweets and news are released. Our results provide
quantitative support for the suggestion that movements in financial markets and movements in financial news and tweets are intrinsically
interlinked.


Project link: http://yoda.kean.edu/~kasturim/CPS5921/Project1/Project1.php
