<!--********************* Modal de confirmation  *******************************************-->
<div class="modal fade" id="ModalConfirm" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-default" id="ModalLabelSuppression">TITRE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="info_suppression" class="text-danger text-center">INFO</p>
        <div class="form-group row mx-auto justify-content-center">
            <form action="ACTION" method="POST">
                <input type="hidden" name="id_suppression" id="id_suppression"></input>
                <input type="submit" class="btn btn-default btn-sm" name="supprimer" value="supprimer" id="supprimer">
            </form>
            <button class="btn btn-outline-default btn-sm" data-dismiss="modal"/>ANNULER</button> <!-- Bouton d'annulation -->
        </div>
      </div>
    </div>
  </div>
</div>
<!--********************* FIN de Modal de confirmation *******************************************-->
