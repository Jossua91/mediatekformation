<?php
namespace App\Controller\admin;

use App\Form\FormationType;
use App\Entity\Formation;
use App\Repository\CategorieRepository;
use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controleur des formations
 *
 * @author emds
 */
class AdminFormationsController extends AbstractController {

    /**
     * 
     * @var FormationRepository
     */
    private $formationRepository;
    
    /**
     * 
     * @var CategorieRepository
     */
    private $categorieRepository;
    
    private const ADMIN_FORMATIONS_PATH = "pages/admin/formations/formations.html.twig";
    
    function __construct(FormationRepository $formationRepository, CategorieRepository $categorieRepository) {
        $this->formationRepository = $formationRepository;
        $this->categorieRepository= $categorieRepository;
    }
    
    #[Route('/admin/formations', name: 'admin.formations')]
    public function index(): Response{
        $formations = $this->formationRepository->findAll();
        $categories = $this->categorieRepository->findAll();
        return $this->render(self::ADMIN_FORMATIONS_PATH, [
            'formations' => $formations,
            'categories' => $categories
        ]);
    }
    
    #[Route('/admin/formations/tri/{champ}/{ordre}/{table}', name: 'admin.formations.sort')]
    public function sort($champ, $ordre, $table=""): Response{
        $formations = $this->formationRepository->findAllOrderBy($champ, $ordre, $table);
        $categories = $this->categorieRepository->findAll();
        return $this->render(self::ADMIN_FORMATIONS_PATH, [
            'formations' => $formations,
            'categories' => $categories
        ]);
    }     

    #[Route('/admin/formations/recherche/{champ}/{table}', name: 'admin.formations.findallcontain')]
    public function findAllContain($champ, Request $request, $table=""): Response{
        $valeur = $request->get("recherche");
        $formations = $this->formationRepository->findByContainValue($champ, $valeur, $table);
        $categories = $this->categorieRepository->findAll();
        return $this->render(self::ADMIN_FORMATIONS_PATH, [
            'formations' => $formations,
            'categories' => $categories,
            'valeur' => $valeur,
            'table' => $table
        ]);
    }
    
    #[Route('/admin/formations/formation/add', name: 'admin.formation.add')]
    public function add(Request $request): Response{
        $formation = new Formation();
        $formFormation = $this->createForm(FormationType::class, $formation);
        
        $formFormation->handleRequest($request);
        if ($formFormation->isSubmitted() && $formFormation->isValid()) {
            $this->formationRepository->add($formation);
            return $this->redirectToRoute('admin.formations');
        }
        
        return $this->render("pages/admin/formations/add.html.twig", [
            'formation' => $formation,
            'formformation' =>$formFormation->createView()
        ]);
    }
    
    #[Route('/admin/formations/formation/{id}/edit', name: 'admin.formation.edit')]
    public function edit($id, Request $request): Response{
        $formation = $this->formationRepository->find($id);
        $formFormation = $this->createForm(FormationType::class, $formation);
        
        $formFormation->handleRequest($request);
        if ($formFormation->isSubmitted() && $formFormation->isValid()) {
            $this->formationRepository->add($formation);
            return $this->redirectToRoute('admin.formations');
        }
        
        return $this->render("pages/admin/formations/edit.html.twig", [
            'formation' => $formation,
            'formformation' =>$formFormation->createView()
        ]);
    }
    
    #[Route('/admin/formations/formation/{id}/delete', name: 'admin.formations.delete')]
    public function delete($id): Response{
        $formation = $this->formationRepository->find($id);
        $this->formationRepository->remove($formation);
        return $this->redirectToRoute('admin.formations');        
    } 
}