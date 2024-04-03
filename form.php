<form action="thanks.php" method="post">
    <div>
        <label for="name">Nom:</label>
        <input type="text" id="name" name="user_name" required>
    </div>
    <div>
        <label for="firstname">Prénom:</label>
        <input type="text" id="firstname" name="user_firstname" required>
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="user_email" required>
    </div>
    <div>
        <label for="phone">téléphone:</label>
        <input type="phone" id="phone" name="user_phone_number" required>
    </div>
    <div>
        <label for="subject">Subjet:</label>
        <select id="subject" name="user_subject" required>
            <option value="question">Question</option>
            <option value="issue">Problème</option>
            <option value="other">Autres</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_message" required></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>