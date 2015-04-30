# Test Technique Tiller

## Travail

1. Installer le projet Symfony2
2. liste des categories
3. creation categories
4. modification categories
5. suppression categories
6. liste des produits
7. creation produits
8. modification produits
9. suppression produits
10. (bonus) service pour recupérer les produits d'une catégorie (au format JSON) : /category/{{id}}/products.json
11. (bonus) service pour recupérer les produits ou categories contenant un mot clé : /search/{{search}}


## Données

* Entity: AppBundle:Category
* Name: Entrées
* Products:
 * Entity: AppBundle:Product
 * Name: Salade 1
 * Price: 5,00
 * Description : Description de la salade 1

 * Entity: AppBundle:Product
 * Name: Salade 2
 * Price: 6,00
 * Description : Description de la salade 2
