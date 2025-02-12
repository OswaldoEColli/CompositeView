<?php
// Interface para los componentes de la vista
interface ViewComponent {
    public function render(): string;
}

// Componente: Foto de perfil con botón de notificación
class ProfileComponent implements ViewComponent {
    public function render(): string {
        return '<div class="profile">
                    <img src="/img/profile.jpg" class="profile-pic" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover;>
                    <button class="notification-btn">🔔</button>
                </div>';
    }
}

// Componente: Barra de búsqueda
class SearchBarComponent implements ViewComponent {
    public function render(): string {
        return '<div class="search-bar">
                    <input type="text" placeholder="Buscar...">
                    <button>🔍</button>
                </div>';
    }
}

// Componente: Botones de navegación
class ButtonsComponent implements ViewComponent {
    public function render(): string {
        return '<div class="buttons">
                    <button>🏠</button>
                    <button>👥</button>
                    <button>📁</button>
                    <button>📩</button>
                </div>';
    }
}

// Componente: Grupo (agrupando Profile, SearchBar y Buttons)
class GroupComponent implements ViewComponent {
    
    public function render(): string {

        $profile = (new ProfileComponent())->render();    
        $searchBar = (new SearchBarComponent())->render(); 
        $buttons = (new ButtonsComponent())->render();    

        return "<div class='group'>"
                . $profile    
                . $searchBar  
                . $buttons    
                . "</div>";  
    }
}
