import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';
 
@Component({
  selector: 'page-feeds',
  templateUrl: 'feeds.html'
})
export class Feeds {
 
  posts: any;
 
  constructor(public navCtrl: NavController, public http: Http) {
 
    this.http.get('https://www.reddit.com/r/gifs/new/.json?limit=50').map(res => res.json()).subscribe(data => {
        this.posts = data.data.children;
    });
 
  }
}
