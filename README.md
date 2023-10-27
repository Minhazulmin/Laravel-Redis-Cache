## Following the instruction you can run Laravel-Redis in your local machine

### Setup local enviroment 🙂 

![minhazulmin](https://i.postimg.cc/d0wCK1MS/Screenshot-7.png)

**[Step - 1]** **Install wsl (windows subsystems for linux):**<br/>
(Open PowerShell In Your Local Machine and put this command)
 ```bash
wsl - -install
```
**[Step - 2]** **Check wsl In Your Local Machine:** 
```bash
 wsl -l -v
```
**[Step - 3]** **Open Linux application on your local machine (ubuntu):**
 
![minhazulmin](https://i.postimg.cc/66yH89qm/Screenshot-6.png)

**#Go to this url for below all command:** <br/>

https://redis.io/docs/getting-started/installation/install-redis-on-windows/ <br/>
 or<br/>
**[Step - 4]** **Copy the below command and past on your ubuntu terminal:** 
```bash
curl -fsSL https://packages.redis.io/gpg | sudo gpg --dearmor -o/usr/share/keyrings/redis-archive-keyring.gpg
```
**[Step - 5]** **Copy this command and past on your ubuntu terminal:** 
```bash
sudo apt-get update
```
**[Step - 6]** **Copy this command and past on your ubuntu terminal for:** 
**# Install redis on your local machine**
```bash
sudo apt-get install redis
```
**[Step - 7]** **Start redis server on your local machine through this command:**
```bash
sudo service redis-server start
```
**[Step - 8]** **Redis terminal open for pink server:**
 ```bash
 redis-cli
```
After put this command this url will be open on you terminal 127.0.0.1:6379 ><br/>
Write 'pink' like : 127.0.0.1:6379> ping<br/>
You will get the result: PONG<br/>

**[Step - 9]** **Store Data into Redis**
```bash
127.0.0.1:6379>set min "minhazul"
```
Then you will get the result output "ok"<br/>

**[Step - 10]** **Get Data into Redis**
```bash
127.0.0.1:6379>get min
```
Then you will get the result output "minhazulmin"
### Local setup done 👏


**[Step - 11]** **Create laravel new project:**
```bash
composer create-project laravel/laravel example-app
```
Or
```bash
laravel new example-app
```
**=> Create a laravel project with curd ready**<br/>
**=> Setup database like - name: laravel-redis or as you want**

**[Step - 12]** **Get Dummy Data from this url**
```bash 
	https://filldb.info/dummy/step1
```
**=> Create data and export table and import on the mysql database ( Local )**<br/>
**=>  Write function on controller and show data and get data in home page**

**[Step - 13]** **Open project terminal and Install redis on your project**
```bash 
	composer require predis/predis
```
**[Step - 14]** **Copy code and push on the project .env**
```bash
REDIS_CLIENT=predis
```
**[Step - 15]** **run the command on the project terminal**
```bash 
	php artisan serve
```
Hit the url
```bash
	http://127.0.0.1:8000/
```
**Output:**
![minhazulmin](https://i.postimg.cc/pT3Hbm9w/Data-get-form-redis.png)

