<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed Administrator
        User::updateOrCreate(
            ['email' => 'admin@cahayainterior.com'],
            [
                'name' => 'CIS Admin',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );

        // Seed Projects
        $projects = [
            [
                'title' => 'The Glass Pavilion Estate',
                'slug' => 'the-glass-pavilion-estate',
                'short_description' => 'A sprawling residential complex that dissolves the boundary between interior sanctuaries and the surrounding lush topography.',
                'description' => 'Characterized by vast expanses of structural glass, deeply shadowed overhangs, and a rigorously constrained palette of natural stone and blackened steel.',
                'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDdkRc_thImbGW7jNlJCt1qHlE8oH_vTd_s6ISPlDQ-I46KfUOHAfMcN1x_cbdgO_ajNCxQC6w_rt0xMSYpF89YEvOOXfPY1GOA0hLRig1HwQ-fxf8JznTo5KnNhfVLSrbky_BrtWtx488wizaSlt0z3VsQIHVzcnDWE_cnVonTMiakeQw3eZKIJ_yvS-D4mjYIRfN5IIiqa6GAUXF906MJXIkBcQAGXBipKEg7N0LjxY68ff6rk9FOhm4rbC9KQsbNol43I2STgoUr',
                'gallery_images' => [
                    'https://lh3.googleusercontent.com/aida-public/AB6AXuDdkRc_thImbGW7jNlJCt1qHlE8oH_vTd_s6ISPlDQ-I46KfUOHAfMcN1x_cbdgO_ajNCxQC6w_rt0xMSYpF89YEvOOXfPY1GOA0hLRig1HwQ-fxf8JznTo5KnNhfVLSrbky_BrtWtx488wizaSlt0z3VsQIHVzcnDWE_cnVonTMiakeQw3eZKIJ_yvS-D4mjYIRfN5IIiqa6GAUXF906MJXIkBcQAGXBipKEg7N0LjxY68ff6rk9FOhm4rbC9KQsbNol43I2STgoUr'
                ],
                'category' => 'Residential',
                'location' => 'Jakarta Selatan',
                'year' => 2023,
                'scale' => '1,200 sqm',
                'is_featured' => true,
                'seo_title' => 'The Glass Pavilion Estate - Cahaya Interior Sejahtera',
                'seo_description' => 'A stunning residential estate design in Jakarta Selatan by Cahaya Interior Sejahtera, focusing on structural glass and natural materials.',
            ],
            [
                'title' => 'The Serene Penthouse',
                'slug' => 'the-serene-penthouse',
                'short_description' => 'A contemporary luxury kitchen and dining area in a high-rise penthouse.',
                'description' => 'The space features sleek, matte black cabinetry contrasting with a massive, dramatically veined white marble island. Natural light floods the room, emphasizing the clean, minimalist architectural lines.',
                'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuC_cCYNroNC2g8x5vlZp6ZWx-F9xXa0EeTd8GqF8i4RVYy0GQTLzJUgVa_F6nsrZMwjl9ih2ncAd_7V8vcO-AOAutYiLKc7wD6yZDK3bMz7qpcP-uSfpv4J_EL2RAWcNQ7MShieesWWl1q8b-vQodTpeIZQtp4omiQra1YyZySo1IjOlAKu4w-ZWsbTCvSae84rwxxi5XFaYBipBtFFQrxSlmnchtMBFUfqtp6ATAr6nkox0eya_zjSV0aRsBk9aygkpgHS_OhKDdTf',
                'gallery_images' => [],
                'category' => 'Residential',
                'location' => 'Jakarta Selatan',
                'year' => 2023,
                'scale' => '350 sqm',
                'is_featured' => true,
                'seo_title' => 'The Serene Penthouse | Luxury Residence Jakarta',
                'seo_description' => 'Explore the Serene Penthouse designed by Cahaya Interior Sejahtera, featuring custom black cabinetry and fine Italian marble.',
            ],
            [
                'title' => 'Villa Lumina',
                'slug' => 'villa-lumina',
                'short_description' => 'A gorgeous, wide-angle luxury living room design in Bali, integrated with the natural surroundings.',
                'description' => 'Characterized by expansive floor-to-ceiling glass walls that blur the line between indoors and outdoors. The interior features low-profile furniture in soft, earthy tones resting on a polished concrete floor.',
                'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCcJaOqJC9aUaNl0TTecvXgyC2yiVsNbl8MqnqXSOy-ib4NB9DHBu-TlwE7Hrsws7NKQy1Sg0ciEfQJ6wQLlEVSdDAjLM-10UddwbUerV-h48htSAAKbGCfvVGOuReDpB0qmTH6OvcZEEjxaFfXJW3BJ2ZUe39_EyxRHrBBnh8LsjlanYHdlcwEP8aGjWSrduVxqoLbDec_vBi28OWqx2qPY32AW3aXopH_8ODnZDIsjnnSWJxg1YKnMCx2PNVVfALKJca0R0pYPcxs',
                'gallery_images' => [],
                'category' => 'Residential',
                'location' => 'Bali',
                'year' => 2024,
                'scale' => '600 sqm',
                'is_featured' => true,
                'seo_title' => 'Villa Lumina Bali - Premium Interior Design',
                'seo_description' => 'Villa Lumina features pristine modern luxury design elements, located in Bali and crafted by Cahaya Interior Sejahtera.',
            ],
            [
                'title' => 'Aura Executive Suites',
                'slug' => 'aura-executive-suites',
                'short_description' => 'Rigorous architectural office interior designed for premium workflow in Sudirman CBD.',
                'description' => 'A pristine workspace designed to evoke executive leadership, combining warm acoustics, high-efficiency desk arrays, and premium private lounges.',
                'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBSpFoKXgPV4EJOV75ypchbFml9M8oVWzWRyzgLRqrqtkQawufDydMdCu_7yzz-aSn0EE6_9i8axtCv5RC7xIE_q4egtBrRj7npKu4uJycUHPD2rrp5tcvGp9-xzF383xLHG4UOMt0ZHH4j-KtrS7wS0Slvggwahurci6FKT1YglaLMhGL03n7co9hyrug8bPttVCJF0roSPHzY1bx_4Mu83hKSe2_--l8OCWvFFmqVt3uUIPgmwfQnBtA1VlU5ikRaokUMmIftsjX5',
                'gallery_images' => [],
                'category' => 'Office',
                'location' => 'Sudirman CBD',
                'year' => 2022,
                'scale' => '450 sqm',
                'is_featured' => false,
                'seo_title' => 'Aura Executive Suites - Modern Office Design',
                'seo_description' => 'Executive office interior in Sudirman CBD Jakarta, crafted by Cahaya Interior Sejahtera.',
            ],
            [
                'title' => 'Kemang Residence',
                'slug' => 'kemang-residence',
                'short_description' => 'High-end luxury apartment interior focusing on a meticulously designed open-plan kitchen and dining area.',
                'description' => 'The scene is rendered in a bright, light-mode aesthetic with strong geometric lines. The cabinetry is a sleek matte black, contrasting sharply with a monolithic white marble island with subtle grey veining.',
                'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCJo8mDgkrHHeEKrktyWpjQeYmk65FB9bOCQw8QAbYU5L_HcxRadgELcNBfPOEaIevG0j9RBIuPamoyLx1Ea2oOjgQ8cnA-FK2OdVgYYYB6gdlU_EeRTVEWbRddri5zjOe3z7h1ilt4jHG_c7ZQJTTMv3snKxe5KMTVNliX84FYnCMvb2uMiVTRS7au910x6gCR9Q5PmoJisGxokiU5Nvnxp4Yj0nTEWohOAdJD6Dd90cEYIwD5QA5dMIaati1ZzPmWnVhx_wG8ZYO3',
                'gallery_images' => [],
                'category' => 'Residential',
                'location' => 'Kemang',
                'year' => 2023,
                'scale' => '400 sqm',
                'is_featured' => false,
                'seo_title' => 'Kemang Residence - Luxury Open-Plan Interior',
                'seo_description' => 'Contemporary residential design in Kemang, featuring customized cabinetry and light-flooded layouts.',
            ],
            [
                'title' => 'The Luminary Hotel',
                'slug' => 'the-luminary-hotel',
                'short_description' => 'A grand, architectural interior of a boutique hotel lobby in Bali.',
                'description' => 'The design language speaks of modern luxury with a towering double-height ceiling and massive vertical windows letting in bright daylight. Features reception desk of dark granite.',
                'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCJ--AMfIZq1Lu9zhTuxmK3etbYsnLe-cTg1t6Y-KUHByoWI_fdFYbftOUP5ND3l1-BSGJ-o9NIlNCsW_Hp4ao4dyYugkM4ZmBChKZ47vhGVCVFuL9eD1pI-AQJhFWJqanCfUUJqiWAMloy_ibUWIHYbALZgykypeN0ECMLJupFfoCU_P0fuGGNzzWt0nee3yhrHhqShMOn0t8FVNNkZyEQ0xeUy81SfPl1a9AdllwHLJvfviuJ6K1y349__roCH_B6Rn_LoKbXEI4G',
                'gallery_images' => [],
                'category' => 'Hospitality',
                'location' => 'Bali',
                'year' => 2021,
                'scale' => '5,400 sqm',
                'is_featured' => false,
                'seo_title' => 'The Luminary Hotel Lobby - Luxury Hospitality Design',
                'seo_description' => 'High-end hotel lobby interior in Bali by Cahaya Interior Sejahtera, focusing on grand columns and raw natural stone.',
            ],
            [
                'title' => 'Menteng Heritage',
                'slug' => 'menteng-heritage',
                'short_description' => 'An austere yet warm minimalist dining room setting within a heritage residential project.',
                'description' => 'A long, custom-crafted solid walnut dining table sits on a pale, seamless terrazzo floor. Eight sleek, deep black dining chairs surround the table, providing high contrast against the pristine white walls.',
                'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuAfjZSgFxWB30J8otEA8I84nGQSuXGAwJd6nYRXoUgZZXLC0OZ3ux1nd72KVgoRalRJLmmC72v46yW1JEVtRYa42IdXIjUYaIrygX21_PraESoisXcxxY_hE8tQWdymEZIiTfCSN-7S21WhLdUk3IUsZ2Gw0mmzt8UyZfLriXkHi1ovs2F4yajIbOzXb6x2F3zuDfGCK08qzp0gTZUzhLFgnQnSCcAIyKXhaJ6lcq93pDCNOZtgdrUrzilVFq7dPFydGTE31USmSvLb',
                'gallery_images' => [],
                'category' => 'Residential',
                'location' => 'Menteng',
                'year' => 2024,
                'scale' => '800 sqm',
                'is_featured' => false,
                'seo_title' => 'Menteng Heritage Residence - Editorial Minimalist Design',
                'seo_description' => 'Minimalist dining room with warm walnut furniture in Menteng, Jakarta, by Cahaya Interior Sejahtera.',
            ],
            [
                'title' => 'Nexus Tech HQ',
                'slug' => 'nexus-tech-hq',
                'short_description' => 'A sophisticated corporate headquarters reception area reflecting a modern luxury aesthetic.',
                'description' => 'The space is vast and brightly lit, featuring an architectural staircase crafted from folded steel plates painted pure white. Clad in vertically ribbed acoustic wood panels.',
                'featured_image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuB7S8kCwmjBqpMe6lHZZjh43cXw1rCXHs_d60_siW67MbMoYVFA0IAu-CI87C6VVRHs72ednuUB-bhAj-3i1qycAj2dMsDrVplWeYdjWo-9vTJ-deITuqwSlnGS-wt7tv8ahF8n5u1TNI4Ja4DZADjZg6TgiGgBDkto5wEhFKU2NW6jkpK_nXMRjbizR6wN5sFKkDRw3iYowHoYE0qDglwEfxjqQaNIC_CH_vKRPUCAThseh0cLTZect4qfllm0ecV3OK9u1c7UkWsK',
                'gallery_images' => [],
                'category' => 'Commercial',
                'location' => 'Kuningan',
                'year' => 2023,
                'scale' => '2,500 sqm',
                'is_featured' => false,
                'seo_title' => 'Nexus Tech HQ - Modern Corporate Reception',
                'seo_description' => 'Authoritative corporate headquarters design in Kuningan, Jakarta, designed by Cahaya Interior Sejahtera.',
            ],
        ];

        foreach ($projects as $projectData) {
            Project::updateOrCreate(
                ['slug' => $projectData['slug']],
                $projectData
            );
        }
    }
}
