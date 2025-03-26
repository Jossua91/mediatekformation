<?php
namespace App\Controller\admin;

use App\Form\PlaylistType;
use App\Entity\Playlist;
use App\Repository\CategorieRepository;
use App\Repository\FormationRepository;
use App\Repository\PlaylistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of PlaylistsController
 *
 * @author emds
 */
class AdminPlaylistsController extends AbstractController {
    
    /**
     * 
     * @var PlaylistRepository
     */
    private $playlistRepository;
    
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
    
    private const ADMIN_PLAYLISTS_PATH = "pages/admin/playlists/playlists.html.twig";
    
    function __construct(PlaylistRepository $playlistRepository, 
            CategorieRepository $categorieRepository,
            FormationRepository $formationRespository) {
        $this->playlistRepository = $playlistRepository;
        $this->categorieRepository = $categorieRepository;
        $this->formationRepository = $formationRespository;
    }
    
    /**
     * @Route("/playlists", name="playlists")
     * @return Response
     */
    #[Route('/admin/playlists', name: 'admin.playlists')]
    public function index(): Response{
        $playlists = $this->playlistRepository->findAllOrderByName('ASC');
        $categories = $this->categorieRepository->findAll();
        
        return $this->render(self::ADMIN_PLAYLISTS_PATH, [
            'playlists' => $playlists,
            'categories' => $categories
        ]);
    }

    #[Route('/admin/playlists/tri/{champ}/{ordre}', name: 'admin.playlists.sort')]
    public function sort($champ, $ordre): Response{
        switch($champ){
            case "name":
                $playlists = $this->playlistRepository->findAllOrderByName($ordre);
                break;
            case "nbFormations":
                $playlists = $this->playlistRepository->findAllOrderByNbFormations($ordre);
                break;
            default:
                break;
        }
        $categories = $this->categorieRepository->findAll();
        return $this->render(self::ADMIN_PLAYLISTS_PATH, [
            'playlists' => $playlists,
            'categories' => $categories            
        ]);
    }          

    #[Route('/admin/playlists/recherche/{champ}/{table}', name: 'admin.playlists.findallcontain')]
    public function findAllContain($champ, Request $request, $table=""): Response{
        $valeur = $request->get("recherche");
        $playlists = $this->playlistRepository->findByContainValue($champ, $valeur, $table);
        $categories = $this->categorieRepository->findAll();
        return $this->render(self::ADMIN_PLAYLISTS_PATH, [
            'playlists' => $playlists,
            'categories' => $categories,            
            'valeur' => $valeur,
            'table' => $table
        ]);
    }  

    #[Route('/admin/playlists/playlist/add', name: 'admin.playlists.add')]
    public function add(Request $request): Response{
        $playlist = new Playlist();
        $formPlaylist = $this->createForm(PlaylistType::class, $playlist);
        $formPlaylist->handleRequest($request);
        if ($formPlaylist->isSubmitted() && $formPlaylist->isValid()) {
            $this->playlistRepository->add($playlist, true);
            return $this->redirectToRoute('admin.playlists');
        }
        return $this->render("pages/admin/playlists/add.html.twig", [
            'playlist' => $playlist,
            'formplaylist' => $formPlaylist->createView(),
            'playlistformations' => null
        ]);
    }
    
    #[Route('/admin/playlists/playlist/{id}/edit', name: 'admin.playlists.edit')]
    public function edit($id, Request $request): Response{
        $playlist = $this->playlistRepository->find($id);
        $formPlaylist = $this->createForm(PlaylistType::class, $playlist);
        $formPlaylist->handleRequest($request);
        
        if ($formPlaylist->isSubmitted() && $formPlaylist->isValid()) {
            $this->playlistRepository->add($playlist, true);
            return $this->redirectToRoute('admin.playlists');
        }
        
        $playlistFormations = $this->formationRepository->findAllForOnePlaylist($id);
         
        return $this->render("pages/admin/playlists/edit.html.twig", [
            'playlist' => $playlist,
            'formplaylist' => $formPlaylist->createView(),
            'playlistformations' => $playlistFormations
        ]);
    }
    
    #[Route('/admin/playlists/playlist/{id}/delete', name: 'admin.playlists.delete')]
    public function delete($id): Response{
        $formation = $this->playlistRepository->find($id);
        $this->playlistRepository->remove($formation);
        return $this->redirectToRoute('admin.playlists');        
    } 
}