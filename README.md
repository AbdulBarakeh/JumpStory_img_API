## Developer Notes
When you want to run this application make sure to install the Imagick library. Make sure that you are running PHP 7.4 or lesser, due to PHP 8 not being compatible with Imagick.

### Progress
- At the moment it's possible to upload imagefiles to an "uploads" folder in the directory root, if you navigate to the upload page.
    - **Make sure to only upload jpg or jpeg files.**
- On the index page you can choose an image and click submit, which will redirect you to a page where you can see the meta data of the image.
    - **Depending on how the image was taken more meta data might be available. Feel free to check out the "testImage.jpg" file which contains more meta data.**
## Running the app
Run the app by cloning the repo into the htdocs folder in your xmapp or uwamp server. The path(project root) should be something like this: "C:\xampp\htdocs\jumpstory_img_api\", so that the home/index page url is "localhost/jumpstory_img_api/public/". Start the apache server and access the url(url may vary from system to system)


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
