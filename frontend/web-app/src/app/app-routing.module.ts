import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Routes, RouterModule } from '@angular/router';

import { HomeComponent } from './home/home.component';
import { Home2Component } from './home2/home2.component';
import { Home3Component } from './home3/home3.component';
import { Home4Component } from './home4/home4.component';
import { AboutUsComponent } from './about-us/about-us.component';
import { ProductsComponent } from './products/products.component';
import { NodataComponent } from './nodata/nodata.component';
import { PageNotFoundComponent } from './page-not-found/page-not-found.component';



const appRoutes: Routes = [
    { path: '', component: HomeComponent },
    { path: 'home', component: HomeComponent },
    { path: 'home2', component: Home2Component },
    { path: 'home3', component: Home3Component },
    { path: 'home4', component: Home4Component },
    { path: 'about-us', component: AboutUsComponent },
    { path: 'product', component: ProductsComponent },
    { path: 'product/:slug', component: ProductsComponent },



    { path: '**', component: PageNotFoundComponent },

];

@NgModule({
    imports: [
        RouterModule.forRoot(appRoutes)
    ],
    exports: [
        RouterModule
    ]
})
export class AppRoutingModule {}