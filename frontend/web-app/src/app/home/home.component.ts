import { Component, OnInit } from '@angular/core';
import { freeApiService } from './../services/freeapi.services';
import { Comments } from './../classes/comments';


@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {

  constructor(private _freeApiService: freeApiService) { }

  //lstcomments:[];
  dataList: Comments[] = [];

  ngOnInit(){
  	this._freeApiService.getComments()
  	.subscribe
    (
  		data=>{
        console.log(data)
        this.dataList = data.data;
      }
  	);
  }

}
