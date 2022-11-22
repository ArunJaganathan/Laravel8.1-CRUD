import { Component, OnInit } from '@angular/core';
import { freeApiService } from './../services/freeapi.services';
import { Router, ActivatedRoute, ParamMap,NavigationExtras } from '@angular/router';



@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.css']
})
export class ProductsComponent implements OnInit {
dataList:any[];
products:any[];
name:any[];
params:string;
param1:string;
slug: string;

  constructor(
    private _freeApiService: freeApiService,
    private route: ActivatedRoute,
    private router: Router
    ) { 
      const slugId = this.route.snapshot.paramMap.get('slug');
    }

  ngOnInit(): void {
    

    this.route.queryParams.subscribe(path => {      
      const queryparams = path['slug'];
      console.log(queryparams)
      if(queryparams)
      {
        this.getProducts(queryparams)
      }
        
      });


    
    //this.getCategoryTree();
  }
  onClick(sub:any){
    console.log(sub)
    this.slug = sub.slug
    //alert(sub)
    this.getProducts(this.slug)
  }

  getProducts(slug :String)
  {
   this._freeApiService.getProductsBySlug(slug).subscribe(
      data=>{        
        this.products = data.data;
        console.log(this.products)        
      }
    );
  }
  getCategoryTree(){
    this._freeApiService.getCategoryTreeLists().subscribe(
      data=>{        
        this.dataList = data.data.category;
        console.log(this.dataList)        
      }
    );
  }

}
