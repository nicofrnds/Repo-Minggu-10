<?php include_once("model/Book.php");
class Model
{
    public function getBookList()
    {
        return [
            'UTBK' => new Book('UTBK', 'Nico', 'Bisa lolos dengan cepat'),
            'Masak-Masak' => new Book('Masak-Masak', 'Raski', 'Solusi Cepat Maska'),
            'PHP Untuk Pemula' => new Book('PHP Untuk Pemula', 'CHOK', 'Belajar PHP dengan Mudah'),
            'Matematika' => new Book('Matematika', 'Nico', '')
        ];
    }
    function getBook($title)
    {
        $semua = $this->getBookList();
        return $semua[$title];
    }
}
