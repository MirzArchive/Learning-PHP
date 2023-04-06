<?php

class MySQLDataProvider extends DataProvider
{
    public function getTerms()
    {
        $db = $this->connect();

        if ($db == null) return [];

        $sql = $db->query('SELECT * FROM glossary_term');

        $result = $sql->fetchAll(PDO::FETCH_CLASS, 'GlossaryTerm');

        $db = null;
        $sql = null;

        return $result;
    }

    public function createTerm($term, $definition, $summary)
    {
        $db = $this->connect();

        if ($db == null) return;

        $sql = 'INSERT INTO glossary_term (id, term, definition, summary) VALUES (UUID(), :term, :definition, :summary)';
        $stmt = $db->prepare($sql);

        $stmt->execute([
            ':term' => $term,
            ':definition' => $definition,
            ':summary' => $summary
        ]);

        $db = null;
        $stmt = null;
    }


    public function updateTerm($id, $term, $definition, $summary)
    {
        $db = $this->connect();

        if ($db == null) return;

        $sql = 'UPDATE glossary_term SET term=:term, definition=:definition, summary=:summary WHERE id = :id';
        $stmt = $db->prepare($sql);

        $stmt->execute([
            ':term' => $term,
            ':definition' => $definition,
            ':summary' => $summary,
            'id' => $id
        ]);

        $db = null;
        $stmt = null;
    }

    public function deleteTerm($key)
    {
        $db = $this->connect();

        if ($db == null) return;

        $sql = 'DELETE FROM glossary_term WHERE id = :id';
        $stmt = $db->prepare($sql);

        $stmt->execute(['id' => $key]);

        $db = null;
        $stmt = null;
    }

    public function getTerm($id)
    {
        $db = $this->connect();

        if ($db == null) return null;

        $sql = 'SELECT * FROM glossary_term WHERE id = :id';
        $stmt = $db->prepare($sql);

        $stmt->execute([':id' => $id]);

        $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'GlossaryTerm');

        if (empty($result)) return;

        $db = null;
        $stmt = null;

        return $result[0];
    }

    public function searchTerms($termSearch)
    {
    }

    private function connect()
    {
        try {
            return new PDO($this->source, $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
        } catch (PDOException $err) {
            return null;
        }
    }
}
