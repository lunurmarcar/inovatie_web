/* catalogo_section.js
 * Catálogo Inovatie (simulación en memoria)
 * Bootstrap 5 ya cargado en tu layout.
 */

const CATALOGO_PRODUCTOS = [
  {
    portafolio: 'Química aplicada',
    categoria: 'Bases Químicas',
    sku: 'INO-510',
    nombre: 'INO-510',
    descripcion_corta: 'Copolímero para efecto ultra-reductor de agua',
    descripcion_grafica: '',
    ambiente: '',
    imagen_sugerida: '',
    extra_1_label: 'Ficha/Documento adicional 1',
    extra_1_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con la ficha oficial del producto.',
    extra_2_label: 'Ficha/Documento adicional 2',
    extra_2_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con recomendaciones técnicas y compatibilidades.',
  },
  {
    portafolio: 'Química aplicada',
    categoria: 'Bases Químicas',
    sku: 'INO-650',
    nombre: 'INO-650',
    descripcion_corta: 'Policarboxilato con retención prolongada',
    descripcion_grafica: '',
    ambiente: '',
    imagen_sugerida: '',
    extra_1_label: 'Ficha/Documento adicional 1',
    extra_1_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con la ficha oficial del producto.',
    extra_2_label: 'Ficha/Documento adicional 2',
    extra_2_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con recomendaciones técnicas y compatibilidades.',
  },
  {
    portafolio: 'Química aplicada',
    categoria: 'Bases Químicas',
    sku: 'INO-A90',
    nombre: 'INO-A90',
    descripcion_corta: 'Superplastificante mitigador de arcillas',
    descripcion_grafica: '',
    ambiente: '',
    imagen_sugerida: '',
    extra_1_label: 'Ficha/Documento adicional 1',
    extra_1_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con la ficha oficial del producto.',
    extra_2_label: 'Ficha/Documento adicional 2',
    extra_2_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con recomendaciones técnicas y compatibilidades.',
  },
  {
    portafolio: 'Química aplicada',
    categoria: 'Bases Químicas',
    sku: 'INO-WR10',
    nombre: 'INO-WR10',
    descripcion_corta: 'Reduce material cementante, mejora resistencia',
    descripcion_grafica: '',
    ambiente: '',
    imagen_sugerida: '',
    extra_1_label: 'Ficha/Documento adicional 1',
    extra_1_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con la ficha oficial del producto.',
    extra_2_label: 'Ficha/Documento adicional 2',
    extra_2_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con recomendaciones técnicas y compatibilidades.',
  },
  {
    portafolio: 'Química aplicada',
    categoria: 'Bases Químicas',
    sku: 'INO-FUME950D',
    nombre: 'INO-FUME950D',
    descripcion_corta: 'Microsílica para alto rendimiento',
    descripcion_grafica: '',
    ambiente: '',
    imagen_sugerida: '',
    extra_1_label: 'Ficha/Documento adicional 1',
    extra_1_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con la ficha oficial del producto.',
    extra_2_label: 'Ficha/Documento adicional 2',
    extra_2_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con recomendaciones técnicas y compatibilidades.',
  },
  {
    portafolio: 'Tecnologías para construcción',
    categoria: 'Fibras',
    sku: 'IFO-600',
    nombre: 'IFO-600',
    descripcion_corta: 'Fibra estructural para concreto',
    descripcion_grafica: '',
    ambiente: '',
    imagen_sugerida: '',
    extra_1_label: 'Ficha/Documento adicional 1',
    extra_1_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con la ficha oficial del producto.',
    extra_2_label: 'Ficha/Documento adicional 2',
    extra_2_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con recomendaciones técnicas y compatibilidades.',
  },
  {
    portafolio: 'Tecnologías para construcción',
    categoria: 'Fibras',
    sku: 'ECOSLIM-150',
    nombre: 'ECOSLIM-150',
    descripcion_corta: 'Fibra estructural ECOSLIM 150',
    descripcion_grafica: '',
    ambiente: '',
    imagen_sugerida: '',
    extra_1_label: 'Ficha/Documento adicional 1',
    extra_1_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con la ficha oficial del producto.',
    extra_2_label: 'Ficha/Documento adicional 2',
    extra_2_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con recomendaciones técnicas y compatibilidades.',
  },
  {
    portafolio: 'Tecnologías para construcción',
    categoria: 'Fibras',
    sku: 'ECOSLIM-200',
    nombre: 'ECOSLIM-200',
    descripcion_corta: 'Fibra estructural ECOSLIM 200',
    descripcion_grafica: '',
    ambiente: '',
    imagen_sugerida: '',
    extra_1_label: 'Ficha/Documento adicional 1',
    extra_1_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con la ficha oficial del producto.',
    extra_2_label: 'Ficha/Documento adicional 2',
    extra_2_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con recomendaciones técnicas y compatibilidades.',
  },
  {
    portafolio: 'Tecnologías para construcción',
    categoria: 'Fibras',
    sku: 'ECOSILVER-44',
    nombre: 'ECOSILVER-44',
    descripcion_corta: 'Fibra ECOSILVER 44',
    descripcion_grafica: '',
    ambiente: '',
    imagen_sugerida: '',
    extra_1_label: 'Ficha/Documento adicional 1',
    extra_1_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con la ficha oficial del producto.',
    extra_2_label: 'Ficha/Documento adicional 2',
    extra_2_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con recomendaciones técnicas y compatibilidades.',
  },
  {
    portafolio: 'Tecnologías para construcción',
    categoria: 'Fibras',
    sku: 'FIBRAS METÁLICAS',
    nombre: 'FIBRAS METÁLICAS',
    descripcion_corta: 'Fibras metálicas',
    descripcion_grafica: '',
    ambiente: '',
    imagen_sugerida: '',
    extra_1_label: 'Ficha/Documento adicional 1',
    extra_1_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con la ficha oficial del producto.',
    extra_2_label: 'Ficha/Documento adicional 2',
    extra_2_value:
      'Información complementaria pendiente de base de datos. Este campo se completará con recomendaciones técnicas y compatibilidades.',
  },
];

// Servicios (familia adicional, no viene del Excel).
// Texto base derivado de las cards que compartiste (ajustable después con BD).
const CATALOGO_SERVICIOS = [
  {
    portafolio: 'Servicios',
    categoria: 'Servicios de ingeniería',
    sku: 'SERV-ING-PROY',
    nombre: 'Ingeniería de proyecto',
    descripcion_corta:
      'Diseño y construcción de equipos y plantas para producción de aditivos para concreto y productos químicos para la construcción.',
    imagen: 'assets/img/servicios/ingenieria_proyecto.webp',
  },
  {
    portafolio: 'Servicios',
    categoria: 'Servicios de ingeniería',
    sku: 'SERV-ING-PROD',
    nombre: 'Ingeniería de producto',
    descripcion_corta:
      'Desarrollo de fórmulas ajustadas a la química del cemento y requerimientos técnicos específicos. Escalamiento de fórmulas e implementación en obra.',
    imagen: 'assets/img/servicios/ingenieria_producto.webp',
  },
  {
    portafolio: 'Servicios',
    categoria: 'Servicios de ingeniería',
    sku: 'SERV-CAP',
    nombre: 'Capacitación',
    descripcion_corta:
      'Formación especializada en química del cemento, aditivos para concreto y diseño de mezclas.',
    imagen: 'assets/img/servicios/capacitacion.webp',
  },
  {
    portafolio: 'Servicios',
    categoria: 'Servicios de ingeniería',
    sku: 'SERV-SOURC',
    nombre: 'Sourcing estratégico',
    descripcion_corta:
      'Abastecimiento estratégico de insumos (importación) para la fabricación de aditivos para concreto y productos químicos para la construcción.',
    imagen: 'assets/img/servicios/sourcing_estrategico.webp',
  },
];

let currentFamily = null;
let currentResults = [];
let selectedForQuote = null;

function uniqueFamilies() {
  // Del Excel solo hay dos portafolios; agregamos Servicios fijo.
  const fams = Array.from(new Set(CATALOGO_PRODUCTOS.map((p) => p.portafolio)));
  if (!fams.includes('Servicios')) fams.push('Servicios');
  return fams;
}

function renderFamiliesMenu() {
  const cont = document.getElementById('catalogoMenuFamilias');
  if (!cont) return;
  cont.innerHTML = '';

  uniqueFamilies().forEach((fam) => {
    const btn = document.createElement('button');
    btn.type = 'button';
    btn.className =
      'btn btn-primary catalogo-btn-family catalogo-btn-family--' + fam.replace(/\s+/g, '_');
    btn.textContent = fam.toUpperCase();
    btn.addEventListener('click', () => onFamilyClick(fam));
    cont.appendChild(btn);
  });
}

function buildDatalistSuggestions() {
  const dl = document.getElementById('productSuggestions');
  if (!dl) return;
  dl.innerHTML = '';

  // Sugerencias solo por nombre del producto.
  // En el Excel disponible, el campo de "nombre" coincide con SKU; se respeta.
  CATALOGO_PRODUCTOS.forEach((p) => {
    const opt = document.createElement('option');
    opt.value = p.nombre;
    dl.appendChild(opt);
  });

  // También se pueden sugerir servicios (opcional); por ahora NO, porque pediste buscar por producto.
}

function truncate15(text) {
  const t = (text || '').toString();
  if (t.length <= 15) return t;
  return t.substring(0, 15) + '...';
}

function imagePathForSKU(sku) {
  // Convención: imagen por SKU/Producto.
  // Si no existe, el browser mostrará el fallback onerror del <img>.
  return 'assets/img/productos/' + sku + '.webp';
}

function cardHTML(item, isService = false) {
  const img = isService ? item.imagen || 'assets/img/placeholder.webp' : imagePathForSKU(item.sku);
  const desc = truncate15(item.descripcion_corta);

  return `
    <div class="col-12 col-md-6 col-xl-4">
      <div class="card catalogo-card shadow-sm h-100">
        <img class="card-img-top" src="${img}" alt="${item.nombre}"
             onerror="this.onerror=null;this.src='assets/img/placeholder.webp';">
        <div class="card-body d-flex flex-column">
          <div class="small text-muted mb-1">${isService ? item.categoria : item.categoria}</div>
          <div class="fw-semibold">${isService ? item.nombre : item.nombre}</div>
          <div class="mt-2 text-muted">${desc}</div>
          <div class="mt-auto pt-3 d-flex gap-2">
            <button class="btn btn-outline-primary btn-sm" type="button" data-action="detail" data-sku="${
              item.sku
            }">Ver detalle</button>
            <button class="btn btn-primary btn-sm" type="button" data-action="quote" data-sku="${
              item.sku
            }">Cotizar</button>
          </div>
        </div>
      </div>
    </div>
  `;
}

function renderResults(list, isService = false) {
  const wrap = document.getElementById('catalogoResultados');
  if (!wrap) return;

  if (!list || list.length === 0) {
    wrap.innerHTML = '';
    return;
  }

  wrap.innerHTML = `
    <div class="row g-3">
      ${list.map((i) => cardHTML(i, isService)).join('')}
    </div>
  `;

  // Delegación simple de eventos
  wrap.querySelectorAll("[data-action='detail']").forEach((btn) => {
    btn.addEventListener('click', () => openDetail(btn.getAttribute('data-sku')));
  });
  wrap.querySelectorAll("[data-action='quote']").forEach((btn) => {
    btn.addEventListener('click', () => openQuote(btn.getAttribute('data-sku')));
  });
}

function onFamilyClick(fam) {
  currentFamily = fam;

  if (fam === 'Servicios') {
    currentResults = CATALOGO_SERVICIOS;
    renderResults(currentResults, true);
    return;
  }

  currentResults = CATALOGO_PRODUCTOS.filter((p) => p.portafolio === fam);
  renderResults(currentResults, false);
}

function findItemBySKU(sku) {
  // Buscar primero en productos, luego en servicios
  const p = CATALOGO_PRODUCTOS.find((x) => x.sku === sku);
  if (p) return { item: p, type: 'producto' };
  const s = CATALOGO_SERVICIOS.find((x) => x.sku === sku);
  if (s) return { item: s, type: 'servicio' };
  return null;
}

function setDetailField(id, value) {
  const el = document.getElementById(id);
  if (el) el.textContent = (value ?? '').toString();
}

function showIfHasValue(wrapId, value) {
  const wrap = document.getElementById(wrapId);
  if (!wrap) return;
  wrap.style.display = value ? '' : 'none';
}

function openDetail(sku) {
  const found = findItemBySKU(sku);
  if (!found) return;

  const item = found.item;
  const isService = found.type === 'servicio';

  document.getElementById('detailTitle').textContent = isService
    ? 'Detalle del servicio'
    : 'Detalle del producto';
  document.getElementById('detailSubtitle').textContent = isService
    ? item.categoria
    : item.categoria || '';

  // Imagen
  const img = document.getElementById('detailImage');
  img.src = isService ? item.imagen || 'assets/img/placeholder.webp' : imagePathForSKU(item.sku);
  img.onerror = function () {
    this.onerror = null;
    this.src = 'assets/img/placeholder.webp';
  };

  setDetailField('detailSKU', item.sku);
  setDetailField('detailNombre', item.nombre);
  setDetailField('detailCategoria', item.categoria || '');
  setDetailField('detailPortafolio', item.portafolio || '');

  // Descripción completa
  setDetailField('detailDescripcion', item.descripcion_corta || '');

  if (!isService) {
    // Campos del Excel (mostrar solo si traen dato)
    const dg = item.descripcion_grafica || '';
    const amb = item.ambiente || '';
    const ims = item.imagen_sugerida || '';

    setDetailField('detailDescripcionGrafica', dg);
    showIfHasValue('detailDescripcionGraficaWrap', dg);

    setDetailField('detailAmbiente', amb);
    showIfHasValue('detailAmbienteWrap', amb);

    setDetailField('detailImagenSugerida', ims);
    showIfHasValue('detailImagenSugeridaWrap', ims);

    // Extras (cabeceras finales con poco dato: se colocan genéricas)
    setDetailField('extra1Label', item.extra_1_label);
    setDetailField('extra1Value', item.extra_1_value);
    setDetailField('extra2Label', item.extra_2_label);
    setDetailField('extra2Value', item.extra_2_value);
  } else {
    // En servicios, usamos genéricos para los extras
    setDetailField('detailDescripcionGrafica', '');
    showIfHasValue('detailDescripcionGraficaWrap', false);
    setDetailField('detailAmbiente', '');
    showIfHasValue('detailAmbienteWrap', false);
    setDetailField('detailImagenSugerida', '');
    showIfHasValue('detailImagenSugeridaWrap', false);

    setDetailField('extra1Label', 'Alcance');
    setDetailField(
      'extra1Value',
      'Información complementaria pendiente de base de datos. Se completará con alcance, entregables y tiempos.'
    );
    setDetailField('extra2Label', 'Requerimientos');
    setDetailField(
      'extra2Value',
      'Información complementaria pendiente de base de datos. Se completará con requisitos de proyecto y consideraciones técnicas.'
    );
  }

  selectedForQuote = {
    sku: item.sku,
    producto: item.nombre,
    portafolio: item.portafolio,
    categoria: item.categoria,
  };

  const modal = new bootstrap.Modal(document.getElementById('productDetailModal'));
  modal.show();
}

function openQuote(sku) {
  const found = findItemBySKU(sku);
  if (!found) return;
  const item = found.item;

  selectedForQuote = {
    sku: item.sku,
    producto: item.nombre,
    portafolio: item.portafolio,
    categoria: item.categoria,
  };

  fillQuoteForm();
  const modal = new bootstrap.Modal(document.getElementById('quoteModal'));
  modal.show();
}

function fillQuoteForm() {
  if (!selectedForQuote) return;

  document.getElementById('quoteSKU').value = selectedForQuote.sku || '';
  document.getElementById('quoteProducto').value = selectedForQuote.producto || '';
  document.getElementById('quotePortafolio').value = selectedForQuote.portafolio || '';
  document.getElementById('quoteCategoria').value = selectedForQuote.categoria || '';

  document.getElementById(
    'quoteProductHeading'
  ).textContent = `Producto seleccionado: ${selectedForQuote.producto} (${selectedForQuote.sku})`;
}

function setupDetailQuoteButtons() {
  document.getElementById('btnCotizarDesdeDetalle').addEventListener('click', () => {
    const detailModalEl = document.getElementById('productDetailModal');
    bootstrap.Modal.getInstance(detailModalEl)?.hide();
    fillQuoteForm();
    new bootstrap.Modal(document.getElementById('quoteModal')).show();
  });

  document.getElementById('btnCotizarFooter').addEventListener('click', () => {
    const detailModalEl = document.getElementById('productDetailModal');
    bootstrap.Modal.getInstance(detailModalEl)?.hide();
    fillQuoteForm();
    new bootstrap.Modal(document.getElementById('quoteModal')).show();
  });
}

function setupSearch() {
  const input = document.getElementById('catalogoBuscador');
  const btn = document.getElementById('btnBuscarProducto');

  btn.addEventListener('click', () => {
    const v = (input.value || '').trim();
    if (!v) {
      // Si está vacío, no forzamos nada; dejamos resultados tal como estén
      return;
    }

    // Buscar SOLO por nombre (en el dataset actual nombre=SKU; se respeta tu regla).
    const match = CATALOGO_PRODUCTOS.find((p) => (p.nombre || '').toString() === v);
    if (match) {
      currentResults = [match];
      renderResults(currentResults, false);
      return;
    }

    // Si no hay match exacto, limpiar
    currentResults = [];
    renderResults(currentResults, false);
  });

  // Enter también dispara búsqueda
  input.addEventListener('keydown', (e) => {
    if (e.key === 'Enter') {
      e.preventDefault();
      btn.click();
    }
  });
}

document.addEventListener('DOMContentLoaded', () => {
  renderFamiliesMenu();
  buildDatalistSuggestions();
  setupDetailQuoteButtons();
  setupSearch();
});
