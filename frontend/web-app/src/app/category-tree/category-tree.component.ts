import { Component, OnInit } from '@angular/core';
import { freeApiService } from './../services/freeapi.services';
import { Router, ActivatedRoute, ParamMap,NavigationExtras } from '@angular/router';

@Component({
  selector: 'app-category-tree',
  templateUrl: './category-tree.component.html',
  styleUrls: ['./category-tree.component.css']
})
export class CategoryTreeComponent implements OnInit {

  dataList:any[];
  products:any[];
  slug:String;

  constructor(
    private _freeApiService: freeApiService,
    private route: ActivatedRoute,
    private router: Router
    ) 
  { 

  }

  ngOnInit(): void {
    const slugId = this.route.snapshot.paramMap.get('slug');
  	this.getCategoryTree()
    if(slugId)
    {
      //this.getProducts(slugId)
    }
  }

  getCategoryTree(){
    this._freeApiService.getCategoryTreeLists()
    .subscribe(
      data=>{        
        this.dataList = data.data.category;
        console.log(this.dataList)        
      }
    );
  }
  onClick(sub:any){
    this.slug = sub.slug
    this.router.navigate(['/product/'],{queryParams:{slug:this.slug }});
    
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

}
