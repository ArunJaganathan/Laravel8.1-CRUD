import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable()
export class freeApiService {
	HOST_URL:String;

  constructor(private httpclient: HttpClient) {
  	this.HOST_URL = 'http://127.0.0.1:8000/api/';
  }

  getComments() : Observable <any> {
  	return this.httpclient.get(this.HOST_URL+'categories')
  }
  
  getCategoryTreeLists() : Observable <any> {
  	return this.httpclient.get(this.HOST_URL+'categories')
  }
  
  getProductsBySlug(slug:String) : Observable <any> {
  	return this.httpclient.get(this.HOST_URL+'product'+'/'+slug)
  }
}