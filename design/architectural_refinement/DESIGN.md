---
name: Architectural Refinement
colors:
  surface: '#f9f9f9'
  surface-dim: '#dadada'
  surface-bright: '#f9f9f9'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f3f3f3'
  surface-container: '#eeeeee'
  surface-container-high: '#e8e8e8'
  surface-container-highest: '#e2e2e2'
  on-surface: '#1a1c1c'
  on-surface-variant: '#4c4546'
  inverse-surface: '#2f3131'
  inverse-on-surface: '#f1f1f1'
  outline: '#7e7576'
  outline-variant: '#cfc4c5'
  surface-tint: '#5e5e5e'
  primary: '#000000'
  on-primary: '#ffffff'
  primary-container: '#1b1b1b'
  on-primary-container: '#848484'
  inverse-primary: '#c6c6c6'
  secondary: '#5f5e5e'
  on-secondary: '#ffffff'
  secondary-container: '#e4e2e1'
  on-secondary-container: '#656464'
  tertiary: '#000000'
  on-tertiary: '#ffffff'
  tertiary-container: '#261900'
  on-tertiary-container: '#a17f3b'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#e2e2e2'
  primary-fixed-dim: '#c6c6c6'
  on-primary-fixed: '#1b1b1b'
  on-primary-fixed-variant: '#474747'
  secondary-fixed: '#e4e2e1'
  secondary-fixed-dim: '#c8c6c6'
  on-secondary-fixed: '#1b1c1c'
  on-secondary-fixed-variant: '#474747'
  tertiary-fixed: '#ffdea5'
  tertiary-fixed-dim: '#e9c176'
  on-tertiary-fixed: '#261900'
  on-tertiary-fixed-variant: '#5d4201'
  background: '#f9f9f9'
  on-background: '#1a1c1c'
  surface-variant: '#e2e2e2'
typography:
  headline-xl:
    fontFamily: Playfair Display
    fontSize: 64px
    fontWeight: '700'
    lineHeight: 72px
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Playfair Display
    fontSize: 48px
    fontWeight: '600'
    lineHeight: 56px
    letterSpacing: -0.01em
  headline-md:
    fontFamily: Playfair Display
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
  headline-sm:
    fontFamily: Playfair Display
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
  headline-lg-mobile:
    fontFamily: Playfair Display
    fontSize: 36px
    fontWeight: '600'
    lineHeight: 44px
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  body-sm:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
  label-lg:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 20px
    letterSpacing: 0.05em
  label-md:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '500'
    lineHeight: 16px
    letterSpacing: 0.03em
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  unit: 8px
  container-max: 1280px
  gutter: 32px
  margin-desktop: 64px
  margin-mobile: 24px
  section-gap: 120px
---

## Brand & Style

This design system is built for a premium corporate environment, specifically tailored for high-end interior design and construction. The brand personality is **sophisticated, architectural, and authoritative**, evoking an emotional response of trust and exclusivity.

The visual style is a fusion of **Minimalism** and **Modern Luxury**. It prioritizes expansive whitespace, intentional "breathing room," and a strict hierarchical structure that mirrors the precision of architectural blueprints. The aesthetic avoids unnecessary ornamentation, allowing the quality of photography and typography to communicate the premium nature of the service. 

Key visual principles:
- **Spatial Generosity:** Large margins and high-contrast composition.
- **Architectural Precision:** A rigorous grid system with clean lines.
- **Materiality:** Using color and light to simulate high-end finishes like brass, stone, and matte surfaces.

## Colors

The palette is rooted in a "High-Contrast Monochrome" foundation, accented by warm metallic tones to signify luxury and craftsmanship.

- **Primary (Deep Black):** Used for primary text, structural borders, and high-impact UI elements. It represents strength and permanence.
- **Secondary (Dark Gray):** Used for secondary text, icons, and supporting structural elements.
- **Tertiary (Warm Brass/Gold):** Reserved exclusively for "Premium Highlights"—call-to-action buttons, active states, and subtle decorative accents that guide the eye to high-value interactions.
- **Neutral (Off-White/Stone):** The primary background color. It is slightly softened from pure white to reduce eye strain and provide a more "gallery-like" feel to the interface.

## Typography

The typography strategy relies on a classic **Editorial Pair**. 

**Playfair Display** provides a serif elegance for headlines, mimicking luxury mastheads and architectural portfolios. It should be used with tight letter-spacing in larger formats to maintain a "high-fashion" impact.

**Inter** provides a functional, highly readable counterpoint for all functional text. It is used for body copy and labels to ensure that technical details and construction specifications remain clear and professional.

**Usage Rules:**
- Use `headline-xl` only for hero sections with minimal text.
- Use `label-lg` with uppercase styling for navigation links and section overline titles.
- Ensure `body-lg` has ample line height to maintain a premium, airy feel.

## Layout & Spacing

This design system utilizes a **Fixed-Width Centered Grid** for desktop and a **Fluid Grid** for mobile. 

The layout philosophy is defined by "The Luxury Gap"—intentionally large spacing between sections (`section-gap`) to allow the user to focus on one project or service at a time without visual noise.

- **Desktop (1440px+):** A 12-column grid with a 1280px max-container width. 32px gutters provide a spacious feel for image-heavy layouts.
- **Tablet (768px - 1024px):** An 8-column grid with 40px side margins.
- **Mobile (<768px):** A 4-column fluid grid. Section gaps are reduced to 64px to maintain momentum while scrolling.

All components must adhere to an 8px base unit for padding and internal margins to ensure mathematical harmony.

## Elevation & Depth

Elevation is achieved through **Tonal Layering** and **Soft Ambient Shadows**. We avoid heavy, dark shadows in favor of subtle depth that suggests a "stacked paper" or "gallery wall" effect.

- **Level 0 (Base):** Off-white (`#F9F9F9`).
- **Level 1 (Cards/Floating Elements):** Pure White (`#FFFFFF`) with a very soft, diffused shadow: `0px 4px 20px rgba(0, 0, 0, 0.04)`.
- **Level 2 (Interaction/Popovers):** Pure White (`#FFFFFF`) with a deeper but still soft shadow: `0px 12px 40px rgba(0, 0, 0, 0.08)`.

Transitions between levels should be smooth, emphasizing the "tactile" nature of architectural materials.

## Shapes

The shape language is **Refined and Softened**. While the grid is rigid and architectural, the components use a "Rounded" setting (8px to 12px) to soften the corporate edge and make the brand feel more approachable and modern.

- **Standard Elements (Buttons, Inputs):** 8px corner radius (`rounded-md`).
- **Containers (Cards, Image Containers):** 16px corner radius (`rounded-lg`).
- **Decorative Elements:** Occasional use of "Pill" shapes for tags or status indicators to provide visual contrast against the sharp serif typography.

## Components

### Buttons
- **Primary:** Solid Deep Black (#000000) with White text. Rectangular with 8px radius.
- **Secondary:** Transparent with a 1.5px Deep Black border.
- **Premium:** Solid Warm Brass (#C5A059) with White text, used only for "Inquire" or "Book Consultation."

### Input Fields
- Minimalist style: A 1px bottom border in Secondary Gray (#333333) that transitions to Deep Black on focus.
- Backgrounds should be slightly off-white to blend with the page.

### Cards
- Minimalist architectural style. Images should have a 16px radius.
- Text content below the image should use `headline-sm` for project titles and `body-sm` for locations/services.
- No heavy borders; depth is conveyed via Level 1 elevation (subtle shadow).

### Lists
- Use generous vertical padding (24px) between list items.
- Separators should be very thin (1px) and light gray (#E0E0E0).

### Specialized Components
- **Project Gallery:** Large-scale masonry grid with high-quality photography.
- **Material Swatch:** Small circular UI elements to show floor/fabric finishes, using the same 8px spacing unit for alignment.
- **Architectural Stats:** Large `headline-md` numbers paired with `label-md` text for "Years of Experience" or "Projects Completed."