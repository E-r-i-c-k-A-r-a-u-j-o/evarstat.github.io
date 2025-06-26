# EVAR Stat

**EVAR Stat** es un software estadístico profesional, moderno y multiplataforma desarrollado por **Erick Araujo**. Está diseñado para facilitar análisis estadísticos rigurosos mediante una interfaz intuitiva, elegante y accesible, ideal tanto para investigadores como estudiantes, docentes y profesionales en el área de estadística, ciencias sociales, educación, salud y más.

## 🎯 Objetivo

Brindar una alternativa gratuita, completa y moderna para el análisis estadístico, combinando lo mejor de herramientas como **SPSS**, **Jamovi** y **R**, pero con una experiencia más limpia y personalizable.

---

## ✨ Características destacadas

- ✅ Interfaz moderna, con estilo visual profesional y amigable.
- 📊 Módulos de análisis **descriptivo**, **inferencial**, **relacional** y **regresión**.
- 🧮 Cálculos estadísticos con tablas, gráficos interactivos y exportación a Word y PDF.
- 🔌 Soporte para **plugins** para extender la funcionalidad del software.
- 🔁 Multilenguaje (Español, Inglés, entre otros).
- 📂 Importación de datos desde CSV, Excel, R, SPSS, SAS, y bases de datos.
- 📦 Empaquetado como ejecutable (.exe) y en desarrollo para versiones Mac/Linux.
- 🧪 Pruebas de confiabilidad y validez (alfa de Cronbach, V de Aiken, CVC, IC, Kappa de Fleiss).
- 📁 Compatible con archivos `.evar` como extensión propia de proyecto.

---

## 📌 Módulos disponibles

- **Datos**: Importación, edición, limpieza y transformación.
- **Análisis descriptivo**:
  - Estadística univariada.
  - Tablas de frecuencias, tablas cruzadas.
  - Medidas de tendencia central, dispersión y posición.
- **Análisis inferencial**:
  - Pruebas paramétricas y no paramétricas (t, U de Mann-Whitney, Chi-cuadrado, etc.).
  - Cálculo de tamaños de muestra e intervalos de confianza.
- **Regresión**:
  - Regresión lineal simple y múltiple.
  - Regresión no lineal, logística y exponencial.
- **Análisis de relación**:
  - Correlación (Pearson, Spearman, Kendall).
  - Asociación entre variables categóricas.
- **Validez y confiabilidad**:
  - Alfa de Cronbach.
  - Test-retest.
  - Índice CVC, V de Aiken, IC, Kappa de Fleiss.

---

## 🖼️ Capturas de pantalla

<p align="center">
  <img src="https://evarstat.com/img/captura1.png" width="600"/>
  <br><br>
  <img src="https://evarstat.com/img/captura2.png" width="600"/>
</p>

---

## 🧑‍💻 Instalación

### 🔸 Requisitos
- Windows 10/11 (versión Linux en desarrollo)
- Python 3.11+ (solo si deseas usar versión fuente)
- R Portable (incluido)
- Graphviz (incluido)
  
### 🔸 Método 1: Ejecutable (recomendado)
Descarga el archivo `.exe` desde [la página oficial](https://evarstat.com) o desde la [sección de releases en GitHub](https://github.com/E-r-i-c-k-A-r-a-u-j-o/evarstat.github.io/releases) y sigue el asistente de instalación.

### 🔸 Método 2: Desde código fuente
```bash
git clone https://github.com/E-r-i-c-k-A-r-a-u-j-o/evarstat.github.io.git
cd evarstat.github.io
pip install -r requirements.txt
python main.py
