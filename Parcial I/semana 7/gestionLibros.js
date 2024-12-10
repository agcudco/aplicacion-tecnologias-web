const bookForm = document.getElementById('bookForm');
const bookList = document.getElementById('bookList');
const bookTitleInput = document.getElementById('bookTitle');
const bookAuthorInpu = document.getElementById('bookAuthor');

const addBook = (title, author) => {
    //crear un nuevo div para el libro
    const bookItem = document.createElement('div');
    bookItem.classList.add('book');

    const bookTitle = document.createElement('h3');
    bookTitle.textContent = title;

    const bookAuthor = document.createElement('p');
    bookAuthor.textContent = `Autor: ${author}`

    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'Eliminar'

    deleteButton.addEventListener('click', () => {
        bookItem.remove()
        alert('Libro eliminado exitosamente');
    });

    bookItem.appendChild(bookTitle)
    bookItem.appendChild(bookAuthor)
    bookItem.appendChild(deleteButton)

    bookList.appendChild(bookItem)
}

bookForm.addEventListener('submit', (event) => {
    event.preventDefault()

    const title = bookTitleInput.value;
    const author = bookAuthorInpu.value;

    addBook(title, author);

    bookTitleInput.value = '';
    bookAuthorInpu.value = '';
});